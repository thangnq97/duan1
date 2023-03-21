<?php
    namespace App\Controllers\Admin;

    use App\Controllers\BaseController;
    use App\Models\Admin\Bill;

    class BillController extends BaseController {
        public function index() {
            $bills = Bill::all();

            $this->render('admin.bill.billManager', ['bills' => $bills]);
        }

        public function editStatusBill() {
            $id = isset($_GET['id']) ? $_GET['id'] : null;
            if(!$id) {
                header('location: ./bill-manager');
            }

            $bill = Bill::find($id);
            if(!$bill) {
                header('location: ./bill-manager');
            }

            $this->render('admin.bill.editStatusBill', ['bill' => $bill]);
            
        }
    }
?>