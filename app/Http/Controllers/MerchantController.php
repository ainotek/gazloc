<?php

    namespace App\Http\Controllers;

    use App\Http\Controllers\Controller;
    use App\Http\Services\MerchantService;
    use App\Http\Services\OrderService;
    use App\Http\Services\SupplierService;
    use App\Http\Services\UserService;
    use App\Models\Store;
    use App\Models\User;
    use Carbon\Carbon;
    use Exception;
    use Illuminate\Http\Request;
    use Illuminate\Http\Response;
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Facades\Hash;
    use Illuminate\Support\Facades\Validator;
    use Illuminate\Foundation\Auth\RegistersUsers;

    class MerchantController extends Controller
    {
        use RegistersUsers;
        protected $usrService;
        protected $orderService;
        protected $merchantService;
        protected $supplierService;

        public function __construct(UserService $usrService, MerchantService $merchantService, SupplierService $supplierService, OrderService $orderService){
            $this->usrService = $usrService;
            $this->orderService = $orderService;
            $this->merchantService = $merchantService;
            $this->supplierService = $supplierService;
        }

        public function dashboard() {
            return view('merchant/pages/dashboard');
        }

        public function order() {
            $orders = $this->orderService->getAllOrders();
            return view('merchant/pages/orders', compact('orders'));
        }

        public function staffList() {
            $currentUser = Auth::user();
            $store = $this->merchantService->getStoreByUser($currentUser);
            $teamMembers = $this->usrService->getAllUserByStore($currentUser->stores_id);

            return view('merchant/pages/team', compact(['teamMembers', 'store']));
        }

        public function staffAdd(Request $request) {
            $store = $this->merchantService->getStoreByUser(Auth::user());
            $data = $request->all();

            $this->validator($data);
            $this->createUser($data, $store);
            return redirect()->route('merchant.staff.list');
        }

        public function supplier() {
            $suppliers = $this->supplierService->getAllSuppliers();
            $storeProducts = [''];
            return view('merchant/pages/suppliers', compact('suppliers', 'storeProducts'));
        }

        /**
         * Handle an authentication attempt.
         *
         * @param Request $request
         *
         * @return Response
         * @throws Exception
         */
        public function authenticate(Request $request)
        {
            $data = $request->all();
            $user = $request->only('email', 'password');
             key_exists('remember', $data) ? $remember = true : $remember = false;

            if (Auth::attempt($user, $remember)){
                $user = Auth::user();
                $user->last_login = new \DateTime();
                $user->save();
                return redirect()->route('merchant.dashboard');
            }
            else{
                return back()->withInput()->withErrors([
                    'email' => "Nom d'utilisateur ou mot de passe incorect",
                ]);
            }
        }


        /**
         * Store a newly created resource in storage.
         *
         * @param Request $request
         * @return void
         * @throws Exception
         */
        public function create (Request $request)
        {
            $data = $request->all();

            $this->validator($data);

            $store = $this->createStore($data);


            $this->createUser($data, $store);

            $this->authenticate($request);
           return redirect('/connexion');
        }

        /**
         * Create a new store instance after a valid registration.
         *
         * @param array $data
         * @return Store
         * @throws Exception
         */
        protected function createStore(array $data)
        {
            return Store::create([
                'name' => $data['name'],
                'city' =>  $data['city'],
                'email' => $data['email'],
                'role' => 'MERCHANT',
                'rating' => 0,
                'voted' => 0,
                'active' => false,
                'expire_at' => Carbon::now()->addYear()->format("Y-m-d H:i:s"),
            ]);
        }

        /**
         * Create a new user instance after a valid registration.
         *
         * @param array $data
         * @param Store $store
         * @return User
         * @throws Exception
         */
        protected function createUser(array $data, $store)
        {
            if (!key_exists('phone', $data)){
                $data['phone'] = '';
            }
            return User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
                'phone' => $data['phone'],
                'role' => 'MERCHANT',
                'active' => true,
                'expire_at' => new \DateTime(),
                'status' => 'ACTIVE',
                'stores_id' => $store->id,
            ]);
        }

        /**
         * Get a validator for an incoming registration request.
         *
         * @param  array  $data
         * @return \Illuminate\Contracts\Validation\Validator
         */
        protected function validator(array $data)
        {
            return Validator::make($data,
            [
                'name' => ['required', 'string', 'min:2', 'max:80'],
                'city' => ['required', 'min:2', 'string'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'phone' => ['string', 'min:8', 'max:13'],
                'password' => ['required', 'string', 'min:8', 'confirmed'],
                'password_confirmation' => ['required', 'string'],
            ]
            );
        }
    }
