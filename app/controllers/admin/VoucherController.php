<?php
    namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\User\Voucher;

    class VoucherController extends BaseController {
        
        public function index() {
            $vouchers = Voucher::all();

            $this->render('admin.voucher.voucherManager',['vouchers' => $vouchers]);
        }

        public function addVoucher() { 
            $this->render('admin.voucher.addvoucher',[]);
        }

        public function saveAddVoucher() {
            if(isset($_POST['submit'])) {
                $data = $_POST;
                $voucher = new Voucher();
                $voucher->fill($data);
                $voucher->save();
            }
            header('location:./voucher-manager');
        }

        public function editVoucher() {
            $id = isset($_GET['id']) ? $_GET['id'] : null;
            if(!$id) {
                header('location:./voucher-manager');
                die;
            }

            $voucher = Voucher::find($id);
            if(!$voucher) {
                header('location:./voucher-manager');
                die;
            }

            $this->render('admin.voucher.editvoucher', ['voucher' => $voucher]);
        }

        public function saveEditVoucher() {
            $id = isset($_GET['id']) ? $_GET['id'] : null;
            if(!$id) {
                header('location:./voucher-manager');
                die;
            }

            $voucher = Voucher::find($id);
            if(!$voucher) {
                header('location:./voucher-manager');
                die;
            }

            $data = $_POST;
            $voucher->fill($data);
            $voucher->save();
            header('location:./voucher-manager');
        }

        public function deleteVoucher() {
            $id = isset($_GET['id']) ? $_GET['id'] : null;
            if(!$id) {
                header('location:./voucher-manager');
                die;
            }

            $voucher = Voucher::find($id);
            if(!$voucher) {
                header('location:./voucher-manager');
                die;
            }

            Voucher::destroy($id);
            header('location:./voucher-manager');
        }
    }
?>