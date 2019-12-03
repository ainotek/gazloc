<?php

    namespace App\Http\Controllers;

    use App\Http\Requests\UserRequest;
    use App\Http\Services\AuthenticationService;
    use App\Http\Services\MerchantService;
    use App\Http\Services\OrderService;
    use App\Http\Services\ProductService;
    use App\Http\Services\StockService;
    use App\Http\Services\SupplierService;
    use App\Http\Services\UserService;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Foundation\Auth\RegistersUsers;

    class MerchantController extends Controller
    {
        use RegistersUsers;
        protected $userService;
        protected $orderService;
        protected $authService;
        protected $merchantService;
        protected $productService;
        protected $supplierService;
        protected $stockService;

        public function __construct(AuthenticationService $authService,UserService $userService, MerchantService $merchantService, SupplierService $supplierService, StockService $stockService, ProductService $productService , OrderService $orderService){
            $this->userService = $userService;
            $this->authService = $authService;
            $this->orderService = $orderService;
            $this->productService = $productService;
            $this->merchantService = $merchantService;
            $this->supplierService = $supplierService;
            $this->stockService = $stockService;
        }

        public function dashboard() {
            return view('merchant/pages/dashboard');
        }

        public function order() {
            $orders = $this->orderService->getAllSOrderByStore(Auth::user()->store_id);
            return view('merchant/pages/orders', compact('orders'));
        }

        public function staffList() {
            $store = $this->merchantService->getStoreByUser(Auth::user());
            $employees = $this->userService->getAllUserByStore(Auth::user()->store_id);
            return view('merchant/pages/team', compact(['employees', 'store']));
        }

        public function supplier() {
            $suppliers = $this->supplierService->getSuppliersAndPRoductsByStore();
            //$suppliers = $this->stockService->getStockProductAndSupplier();
            return view('merchant/pages/suppliers', compact('suppliers'));
        }

        public function product(int $supplier_id) {
            $supplier = $this->supplierService->getSupplier($supplier_id);
            $products = $this->productService->getProductBySupplierAndStore($supplier_id, Auth::user()->store_id);
            //dd($products, $supplier);
            return view('merchant/pages/product', compact('products', 'supplier'));
        }

        public function timesheet() {
            return view('merchant/pages/timesheet');
        }

        public function setting() {
            return view('merchant/pages/setting');
        }

        public function staffAdd(Request $request) {
            $this->userService->createUser($request->all(), Auth::user()->store_id);
            return redirect()->route('merchant.staff.list');
        }

        public function authenticate(Request $request)
        {
            $remember = key_exists('remember', $request->all());
            $session = $this->authService->login($request->only('email', 'password'), $remember);
            if ($session){
                return redirect()->route('merchant.dashboard');
            }
            return back()->withInput()->withErrors([
                'email' => "Nom d'utilisateur ou mot de passe incorrect",
            ]);
        }

        public function create (UserRequest $request)
        {
            $data = $request->all();
            $store = $this->merchantService->createStore($data);
            $this->userService->createUser($data, $store);

            $this->authenticate($request);
           return redirect()->route('merchant.dashboard');
        }
    }
