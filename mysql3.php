<?php 
$r=  array(1,2,3,4,5,6,7,8 );
$server='localhost';
$username='root';
$password='';
$database='csv';
$con=new mysqli($server,$username,$password,$database);
if ($con->connect_error) {
	die("connection failed" . $con->connect_error);
}
else
{
	
}
$sql="select * from file6";
$result=$con->query($sql);
if($result->num_rows > 0)
{
   
    while($row=$result->fetch_assoc())
    {
     
     $string1=$row['mark'];
      echo "\n";
        $strbeg=0;
        $strpos=0;
        $i=1;
        while($i<=(strlen($string1))/8)
        {   
            $strpos=strpos($string1,',',$strpos);
            $diff=$strpos-$strbeg;
            $str1=substr($string1, $strbeg,$diff);
            $str4=substr($str1, 0,5);
            
            echo "\n";
            $str2=str_replace(substr($str1, 0,6), '', $str1);
            $str3=str_replace(')', '', $str2);
            
            $strbeg=$strpos+1;
            $strpos++;
            if($str4=='HS200')
            {
            	$sql2="update file4 set HS200='$str3' where rollno='$row[regq]'";
                $con->query($sql2);
            }
            else if($str4=='MA202')
            {
            	$sql2="update file4 set MA202='$str3' where rollno='$row[regq]'";
                $con->query($sql2);
            }

            else if($str4=='CS202')
            {
            	$sql2="update file4 set CS202='$str3' where rollno='$row[regq]'";
                $con->query($sql2);
            }
            else if($str4=='CS204')
            {
            	$sql2="update file4 set CS204='$str3' where rollno='$row[regq]'";
                $con->query($sql2);
            }
            else if($str4=='CS206')
            {
            	$sql2="update file4 set CS206='$str3' where rollno='$row[regq]'";
                $con->query($sql2);
            }
            else if($str4=='CS232')
            {
            	$sql2="update file4 set CS232='$str3' where rollno='$row[regq]'";
                $con->query($sql2);
            }

            else if($str4=='CS208')
            {
            	$sql2="update file4 set CS208='$str3' where rollno='$row[regq]'";
                $con->query($sql2);
            }
            else if($str4=='CS234')
            {
            	$sql2="update file4 set CS234='$str3' where rollno='$row[regq]'";
                $con->query($sql2);
            }
            $i++;
           
            
        }
    }
 }
$sql5="select * from file4";
$result1=$con->query($sql5);
if($result1->num_rows>0)
{
 while($row=$result1->fetch_assoc())
 {
  $i1=$row['HS200'];
  $i2=$row['MA202'];
  $i3=$row['CS202'];
  $i4=$row['CS204'];
  $i5=$row['CS206'];
  $i6=$row['CS232'];
  $i7=$row['CS208'];
  $i8=$row['CS234'];
  $sum=0;
  $k=1;
  $p=0;
  $credits=0;
  while($k<=8)
  {
    if($k==1)
    {
      
      $credits=3;
      if($i1=='O')
      {
         $p=10;
      }
      elseif ($i1=='A+')
        {
           
           $p=9;
       }
       elseif ($i1=='A')
        {
           
           $p=8.5;
       }
        elseif ($i1=='B+')
        {
           
           $p=8;
       }
       elseif ($i1=='B')
        {
           
           $p=7;
       }
       elseif ($i1=='C')
        {
           
           $p=6;
       }
       elseif ($i1=='P')
        {
           
           $p=4;
       }
       else{
           $p=0;
           $sum=0;
           break;
       }
       $sum=$sum+$credits*$p;
      
    }

    elseif($k==2)
    {
      
      $credits=4;
      if($i2=='O')
      {
         $p=10;
      }
      elseif ($i2=='A+')
        {
           
           $p=9;
       }
       elseif ($i2=='A')
        {
           
           $p=8.5;
       }
        elseif ($i2=='B+')
        {
           
           $p=8;
       }
       elseif ($i2=='B')
        {
           
           $p=7;
       }
       elseif ($i2=='C')
        {
           
           $p=6;
       }
       elseif ($i2=='P')
        {
           
           $p=4;
       }
       else{
           $p=0;
           $sum=0;
           break;
       }
       $sum=$sum+$credits*$p;

    }
    elseif($k==3)
    {
      
      $credits=4;
      if($i3=='O')
      {
         $p=10;
      }
      elseif ($i3=='A+')
        {
           
           $p=9;
       }
       elseif ($i3=='A')
        {
           
           $p=8.5;
       }
        elseif ($i3=='B+')
        {
           
           $p=8;
       }
       elseif ($i3=='B')
        {
           
           $p=7;
       }
       elseif ($i3=='C')
        {
           
           $p=6;
       }
       elseif ($i3=='P')
        {
           
           $p=4;
       }
       else{
           $p=0;
           $sum=0;
           break;
       }
       $sum=$sum+$credits*$p;

    }
    elseif($k==4)
    {
      
      $credits=4;
      if($i4=='O')
      {
         $p=10;
      }
      elseif ($i4=='A+')
        {
           
           $p=9;
       }
       elseif ($i4=='A')
        {
           
           $p=8.5;
       }
        elseif ($i4=='B+')
        {
           
           $p=8;
       }
       elseif ($i4=='B')
        {
           
           $p=7;
       }
       elseif ($i4=='C')
        {
           
           $p=6;
       }
       elseif ($i4=='P')
        {
           
           $p=4;
       }
       else{
           $p=0;
           $sum=0;
           break;
       }
       $sum=$sum+$credits*$p;

    }
    elseif($k==5)
    {
      
      $credits=3;
      if($i5=='O')
      {
         $p=10;
      }
      elseif ($i5=='A+')
        {
           
           $p=9;
       }
       elseif ($i5=='A')
        {
           
           $p=8.5;
       }
        elseif ($i5=='B+')
        {
           
           $p=8;
       }
       elseif ($i5=='B')
        {
           
           $p=7;
       }
       elseif ($i5=='C')
        {
           
           $p=6;
       }
       elseif ($i5=='P')
        {
           
           $p=4;
       }
       else{
           $p=0;
           $sum=0;
           break;
       }
       $sum=$sum+$credits*$p;

    }
    elseif($k==6)
    {
      
      $credits=1;
      if($i6=='O')
      {
         $p=10;
      }
      elseif ($i6=='A+')
        {
           
           $p=9;
       }
       elseif ($i6=='A')
        {
           
           $p=8.5;
       }
        elseif ($i6=='B+')
        {
           
           $p=8;
       }
       elseif ($i6=='B')
        {
           
           $p=7;
       }
       elseif ($i6=='C')
        {
           
           $p=6;
       }
       elseif ($i6=='P')
        {
           
           $p=4;
       }
       else{
           $p=0;
           $sum=0;
           break;
       }
       $sum=$sum+$credits*$p;

    }
     elseif($k==7)
    {
      
      $credits=3;
      if($i7=='O')
      {
         $p=10;
      }
      elseif ($i7=='A+')
        {
           
           $p=9;
       }
       elseif ($i7=='A')
        {
           
           $p=8.5;
       }
        elseif ($i7=='B+')
        {
           
           $p=8;
       }
       elseif ($i7=='B')
        {
           
           $p=7;
       }
       elseif ($i7=='C')
        {
           
           $p=6;
       }
       elseif ($i7=='P')
        {
           
           $p=4;
       }
       else{
           $p=0;
           $sum=0;
           break;
       }
       $sum=$sum+$credits*$p;

    }
    else
    {
         $credits=1;
      if($i8=='O')
      {
         $p=10;
      }
      elseif ($i8=='A+')
        {
           
           $p=9;
       }
       elseif ($i8=='A')
        {
           
           $p=8.5;
       }
        elseif ($i8=='B+')
        {
           
           $p=8;
       }
       elseif ($i8=='B')
        {
           
           $p=7;
       }
       elseif ($i8=='C')
        {
           
           $p=6;
       }
       elseif ($i8=='P')
        {
           
           $p=4;
       }
       else{
           $p=0;
           $sum=0;
           break;
       }
       $sum=$sum+$credits*$p;

    }
     $k++;
  }
     $sum=$sum/23;
     $sql4="update file4 set cgpa='$sum' where rollno='$row[rollno]'";
     $con->query($sql4);
 }



}

 ?>