<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\User;

class CreditCardController extends Controller
{
    public function tampilCreditCard(Request $request){

        return view('creditCard.tampilCreditCard');
    }

    public function addCreditCard(Request $request){
        $data = $request->all();
        $number = ['creditCard'];

        $number = preg_replace('/\D/', '', $number);
        $number_length = strlen($number);
            $parity        = $number_length % 2;
            
            $total = 0;
			for ($i = 0; $i < $number_length; $i ++)
			{
				$digit = $number[$i];

				// Multiply alternate digits by two
				if ($i % 2 == $parity)
				{
					$digit *= 2;

					// If the sum is two digits, add them together (in effect)
					if ($digit > 9)
					{
						$digit -= 9;
					}
				}

				// Total up the digits
				$total += $digit;
			}

			// If the total mod 10 equals 0, the number is valid
			return ($total % 10 === 0);
            // // echo "<prev>"; print_r($data); die;
            // // $number = $request->input(['']);
            // $total = 0;
            // $i = 1;

            // //get 4 digit terakhir
            // $last4 = substr($number, -4,4);

            // //split string into array
            // $number = str_split($number);
            // $number = preg_replace("/[^0-9]/", "", $number);
            // // $num = preg_replace('/[^\d]/', '', $num);

            // //reverse array
            // $number = array_reverse($number);

            // foreach($number as $digit){
            //     if($i % 2 == 0){
            //         $digit *= 2;

            //         if($digit > 9){
            //             $digit -= 9;
            //         }
            //     }

            //     $total -= $digit;

            //     $i++;

            //     // $total = substr($text,0,10);
            //     // $total = strtolower($total);
            //     // $total = str_replace(' ', '', $total);
            // }

            // // print_r($total); die();
            // //check if disible by 10
            // if($total % 10 == 0){
            //     echo "Kartu anda " .$last4. "Valid";
            // }else{
            //     echo "Kartu elu " .$last4. "inValid";
            // }
            // return redirect()->back()->with('flash_message_success','yo');



            // $validator->setCustomMessages(['luhn' => 'Card number is invalid.']);

			// // Strip any non-digits (useful for credit card numbers with spaces and hyphens)
			// $value = preg_replace('/\D/', '', $value);

			// // Set the string length and parity
			// $number_length = strlen($value);
			// $parity        = $number_length % 2;

			// // Loop through each digit and do the maths
			// $total = 0;
			// for ($i = 0; $i < $number_length; $i ++)
			// {
			// 	$digit = $value[$i];

			// 	// Multiply alternate digits by two
			// 	if ($i % 2 == $parity)
			// 	{
			// 		$digit *= 2;

			// 		// If the sum is two digits, add them together (in effect)
			// 		if ($digit > 9)
			// 		{
			// 			$digit -= 9;
			// 		}
			// 	}

			// 	// Total up the digits
			// 	$total += $digit;
			// }

			// // If the total mod 10 equals 0, the number is valid
			// return ($total % 10 === 0);

        // return response()->json([
        //     'data' => $iuranw
        // ], 201);
    }
}
