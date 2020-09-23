<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Zwei\LoanCalculator\Calculator\EqualTotalPaymentCalculator;
use Zwei\LoanCalculator\Calculator\EqualPrincipalPaymentCalculator;
use Zwei\LoanCalculator\Calculator\MonthlyInterestPaymentCalculator;
use Zwei\LoanCalculator\Calculator\OncePayPrincipalInterestPaymentCalculator;
use \Zwei\LoanCalculator\PaymentCalculatorFactory;

class DashboardController extends Controller
{
   
    public function index(Request $request){

    	$principal          = 50000;// 本金
		$yearInterestRate   = "0.10";// 年利率10%
		$months             = 12;// 借款12个月
		$time               = strtotime("2018-03-20 10:05");// 借款时间
		$decimalDigits      = 2;// 保留小数点后3位,默认保留2位

		// $obj = PaymentCalculatorFactory::getPaymentCalculatorObj(PaymentCalculatorFactory::TYPE_EQUAL_TOTAL_PAYMENT, $principal, $yearInterestRate, $months, 0);
		// return $lists = $obj->getPlanLists();
		// print_r($lists);


		// $obj = PaymentCalculatorFactory::getPaymentCalculatorObj(PaymentCalculatorFactory::TYPE_EQUAL_PRINCIPAL, $principal, $yearInterestRate, $months, 0);
		// return $lists = $obj->getPlanLists();
		// print_r($lists);

        return view('admin.dashboard');
    }

    
    
}
