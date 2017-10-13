
<?php




function thuong($a=8,$b=4) {

	return $a/$b;
	
	
	
	
	
	}
	echo thuong();



	function so_chinh_phuong()
	{
		$x;
		if(x>0)
		{
			$ket_qua = sqrt($x);
			if($ket_qua == int($ket_qua))
			{
				echo "la so chinh phuong";	
			}
			else
				echo "khong la so chinh phuong";	
		}	
		else
		{
				echo "so ban vua nhap khong hop le";
		}
	}


function so_chan($x)
{
	  if( $x%2==0)
	  {
		  echo "x la so chan";
		}
		
	 else { 
	        echo "Số lẻ";
		 }

}
function tich($a,$b)
{
	return $a*$b;
	echo tich();	
}

function hieu($a,$b)
{
	return $a-$b;
	echo hieu();	
}

?>

