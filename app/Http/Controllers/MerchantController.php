<?php

    namespace App\Http\Controllers;

    use App\Http\Controllers\Controller;
    use App\Models\Store;
    use App\Models\User;
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

        public function dashboard() {
            return view('merchant/pages/dashboard');
        }
        public function order() {
            return view('merchant/pages/orders');
        }
        public  function team() {
            return view('merchant/pages/team');
        }
        public function supplier() {
            return view('merchant/pages/suppliers');
        }
        public function logout(){

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
                Auth::user()->last_login = new \DateTime();
                return redirect('/marchand');
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
                'memberships_id' => 1,
                'name' => $data['name'],
                'city' =>  $data['city'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
                'role' => 'MERCHANT',
                'rating' => 0,
                'voted' => 0,
                'active' => true,
                'expire_at' => new \DateTime(),
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
            return User::create([
                'name' => $data['name']. '_ADMIN',
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
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
                'password' => ['required', 'string', 'min:8', 'confirmed'],
                'password_confirmation' => ['required', 'string'],
            ]
            );
        }
    }
