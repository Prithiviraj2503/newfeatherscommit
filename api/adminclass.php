<?php
 
  class admin 
	{
			/* Feemaster Details Start */ 
		public function addfeemaster($mysqli) 
		{
		if(isset($_POST['standard']))		
		{	
		$standard = $_POST['standard'];
		}
		if(isset($_POST['medium']))		
		{
		$medium = $_POST['medium'];
		}
		if(isset($_POST['academicyear']))		
		{
		$academicyear = $_POST['academicyear'];
		}
		if(isset($_POST['status']) && $_POST['status'] == 'Yes')		
		{
		$status    = 0;
		}
		else
		{
		$status    = 1;
		}
	
		$qry = "INSERT INTO feesmaster(standardlist,medium,academicyear,status) 
		VALUES ('".strip_tags($standard)."','".strip_tags($medium)."',
		'".strip_tags($academicyear)."','".strip_tags($status)."');";
	
		$res =$mysqli->query($qry)or die("Error in Query".$mysqli->error);
		$feesmasterid = 0;
		$feesmasterid = $mysqli->insert_id;

		$coursefees       = $_POST['coursefees'];
		$courseamount     = $_POST['courseamount'];
		$coursecollection = $_POST['coursecollection'];
		$courseduedate    = $_POST['courseduedate'];
	    $coursefeeslength= sizeof($coursefees);
				
		$i=0 ;
		for( $i=0 ;$i<$coursefeeslength;$i++){
		$qry1 = "INSERT INTO coursefee(coursefees,courseamount,coursecollectiontype,
		courseduedate,feesid,status) 
		VALUES ('".strip_tags($coursefees[$i])."','".strip_tags($courseamount[$i])."',
		'".strip_tags($coursecollection[$i])."','".strip_tags($courseduedate[$i])."',
		'".strip_tags($feesmasterid)."','0');";
	
		$res1 =$mysqli->query($qry1)or die("Error in Query".$mysqli->error);
		$coursefeesid = 0;
		$coursefeesid = $mysqli->insert_id;
		
		}


		$extrafees       = $_POST['extrafees'];
		$extraamount     = $_POST['extraamount'];
		$extracollection = $_POST['extracollection'];
		$extrafeeduedate = $_POST['extrafeeduedate'];
	    $extrafeeslength= sizeof($extrafees);
	
		
		$j=0 ;
		for( $j=0 ;$j<$extrafeeslength;$j++){
		$qry2 = "INSERT INTO extrafee(extrafees,extraamount,extracollection,
		extraduedate,feesid,status) 
		VALUES ('".strip_tags($extrafees[$j])."','".strip_tags($extraamount[$j])."',
		'".strip_tags($extracollection[$j])."','".strip_tags($extrafeeduedate[$j])."',
		'".strip_tags($feesmasterid)."','0');";
		$res2 =$mysqli->query($qry2)or die("Error in Query".$mysqli->error);
		$extrafeeid = 0;
		$extrafeeid = $mysqli->insert_id;
		}
		

		$amenityfees       = $_POST['amenityfees'];
		$amenityamount     = $_POST['amenityamount'];
		$amenitycollection = $_POST['amenitycollection'];
		$amenityduedate    = $_POST['amenityduedate'];
		
	    $amenityfeeslength= sizeof($amenityfees);		
		$k=0 ;
		for( $$k=0 ;$k<$amenityfeeslength;$k++){
		$qry3 = "INSERT INTO amenityfee(amenityfees,amenityamount,amenitycollection,
		amenityduedate,feesid,status) 
		VALUES ('".strip_tags($amenityfees[$k])."','".strip_tags($amenityamount[$k])."',
		'".strip_tags($amenitycollection[$k])."','".strip_tags($amenityduedate[$k])."',
		'".strip_tags($feesmasterid)."','0');";
		$res3 =$mysqli->query($qry3)or die("Error in Query".$mysqli->error);
		$amenityfeeid = 0;
		$amenityfeeid = $mysqli->insert_id;
		}	


		return $feesmasterid;
		}

		public function updatefeemaster($mysqli,$id) { 		
		//	print("<pre>");
		//	print_r($_POST);
		//	print("</pre>");
		//	die;
			$date  = date('Y-m-d');
			if(isset($_POST['standard']))		
			{	
			$standard = $_POST['standard'];
			}
			if(isset($_POST['medium']))		
			{
			$medium = $_POST['medium'];
			}
			if(isset($_POST['academicyear']))		
			{
			$academicyear = $_POST['academicyear'];
			}
			
			if(isset($_POST['status']) && $_POST['status'] == 'Yes')		
			{
			$status    = 0;
			}
			else
			{
			$status    = 1;
			}		
			
			$updateQry = 'UPDATE  feesmaster  SET standardlist="'.strip_tags($standard).'" ,
			medium="'.strip_tags($medium).'" ,		 
			academicyear="'.strip_tags($academicyear).'", 
			status="'.strip_tags($status).'"	
			WHERE feesid="'.mysqli_real_escape_string($mysqli,$id).'"';  
		
					
			$res =$mysqli->query($updateQry)or die("Error in in update Query!.".$mysqli->error); 
			
			
	    $coursefees       = $_POST['coursefees'];
		$courseamount     = $_POST['courseamount'];
		$coursecollection = $_POST['coursecollection'];
		$courseduedate    = $_POST['courseduedate'];
		$coursefeeid      = $_POST['coursefeeid'];
		
	    $coursefeeslength= sizeof($coursefees);
				
		$i=0 ;
		for( $i=0 ;$i<$coursefeeslength;$i++){
	$updateQrycf = 'UPDATE  coursefee  SET coursefees="'.strip_tags($coursefees[$i]).'" ,
courseamount="'.strip_tags($courseamount[$i]).'" ,		 
coursecollectiontype="'.strip_tags($coursecollection[$i]).'",
courseduedate="'.strip_tags($courseduedate[$i]).'"	
		 WHERE coursefeeid="'.mysqli_real_escape_string($mysqli,$coursefeeid[$i]).'"';  

		
$res =$mysqli->query($updateQrycf)or die("Error in in update Query!.".$mysqli->error); 
		
		}
		$extrafees       = $_POST['extrafees'];
		$extraamount     = $_POST['extraamount'];
		$extracollection = $_POST['extracollection'];
		$extrafeeduedate = $_POST['extrafeeduedate'];
		$extrafeeid      = $_POST['extrafeeid'];
		
	    $extrafeeslength = sizeof($extrafees);
	
	
		$j=0 ;
		for( $j=0 ;$j<$extrafeeslength;$j++){

	$updateQryef = 'UPDATE  extrafee  SET extrafees="'.strip_tags($extrafees[$j]).'" ,
	extraamount="'.strip_tags($extraamount[$j]).'" ,		 
	extracollection="'.strip_tags($extracollection[$j]).'",
	extraduedate="'.strip_tags($extrafeeduedate[$j]).'"	
		 WHERE extrafeeid="'.mysqli_real_escape_string($mysqli,$extrafeeid[$j]).'"';  
		 $res =$mysqli->query($updateQryef)or die("Error in in update Query!.".$mysqli->error); 
		}
	
		$amenityfees       = $_POST['amenityfees'];
		$amenityamount     = $_POST['amenityamount'];
		$amenitycollection = $_POST['amenitycollection'];
		$amenityduedate    = $_POST['amenityduedate'];
		$amenityfeeid      = $_POST['amenityfeeid'];
		
	    $amenityfeeslength = sizeof($amenityfees);
	
	
		$k=0 ;
		for( $k=0 ;$k<$amenityfeeslength;$k++){

	$updateQryamf = 'UPDATE  amenityfee  SET amenityfees="'.strip_tags($amenityfees[$k]).'" ,
	amenityamount="'.strip_tags($amenityamount[$k]).'" ,		 
	amenitycollection="'.strip_tags($amenitycollection[$k]).'",
	amenityduedate="'.strip_tags($amenityduedate[$k]).'"	
		 WHERE 	amenityfeeid="'.mysqli_real_escape_string($mysqli,$amenityfeeid[$k]).'"';  
		 $res =$mysqli->query($updateQryamf)or die("Error in in update Query!.".$mysqli->error); 
		}
	

					  
			}	
		public function getfeemaster($mysqli,$idupd) 
		{
			$qry = "SELECT * FROM feesmaster WHERE feesid='".mysqli_real_escape_string($mysqli,$idupd)."'"; 
			$res =$mysqli->query($qry)or die("Error in Get All Records".$mysqli->error);
			$detailrecords = array();
			if ($mysqli->affected_rows>0)
			{
				$row = $res->fetch_object();	
			    $detailrecords['feesid']                  = $row->feesid; 
				$detailrecords['standardlist']       	  = strip_tags($row->standardlist);
				$detailrecords['medium']       	          = strip_tags($row->medium);
				$detailrecords['academicyear']       	  = strip_tags($row->academicyear);
				$detailrecords['status']                  = strip_tags($row->status);				
			}
			return $detailrecords;
		}

		public function getcoursefee($mysqli,$idfees) 
		{
			$qry = "SELECT * FROM coursefee WHERE feesid='".mysqli_real_escape_string($mysqli,$idfees)."'"; 
			$res =$mysqli->query($qry)or die("Error in Get All Records".$mysqli->error);
			$detailrecords = array();
			$i = 0;
			if ($mysqli->affected_rows>0)
			{
				while($row = $res->fetch_object()) 	
				{					
			    $detailrecords[$i]['coursefeeid']             = $row->coursefeeid; 
				$detailrecords[$i]['coursefees']       	      = strip_tags($row->coursefees);
				$detailrecords[$i]['courseamount']       	  = strip_tags($row->courseamount);
				$detailrecords[$i]['coursecollectiontype']    = strip_tags($row->coursecollectiontype);
				$detailrecords[$i]['courseduedate']           = strip_tags($row->courseduedate);				
				$detailrecords[$i]['status']                  = strip_tags($row->status);	
				$i++;
				}			
			}
			return $detailrecords;
		}
		
		public function getextrafee($mysqli,$idfees) 
		{
			$qry = "SELECT * FROM extrafee WHERE feesid ='".mysqli_real_escape_string($mysqli,$idfees)."'";
			$res =$mysqli->query($qry)or die("Error in Get All Records".$mysqli->error);
			$detailrecords = array();
			$i = 0;
			if ($mysqli->affected_rows>0)
			{
				while($row = $res->fetch_object()) 	
				{					
			    $detailrecords[$i]['extrafeeid']             = $row->extrafeeid; 
				$detailrecords[$i]['extrafees']       	     = strip_tags($row->extrafees);
				$detailrecords[$i]['extraamount']            = strip_tags($row->extraamount);
				$detailrecords[$i]['extracollection']        = strip_tags($row->extracollection);
				$detailrecords[$i]['extraduedate']           = strip_tags($row->extraduedate);				
				$detailrecords[$i]['status']                 = strip_tags($row->status);	
				$i++;
				}			
			}
			return $detailrecords;
		}

		public function getamenityfee($mysqli,$idfees) 
		{
			$qry = "SELECT * FROM amenityfee WHERE feesid ='".mysqli_real_escape_string($mysqli,$idfees)."'"; 
			$res =$mysqli->query($qry)or die("Error in Get All Records".$mysqli->error);
			$detailrecords = array();
			$i = 0;
			if ($mysqli->affected_rows>0)
			{
				while($row = $res->fetch_object()) 	
				{					
			    $detailrecords[$i]['amenityfeeid']           = $row->amenityfeeid; 
				$detailrecords[$i]['amenityfees']       	 = strip_tags($row->amenityfees);
				$detailrecords[$i]['amenityamount']          = strip_tags($row->amenityamount);
				$detailrecords[$i]['amenitycollection']      = strip_tags($row->amenitycollection);
				$detailrecords[$i]['amenityduedate']         = strip_tags($row->amenityduedate);				
				$detailrecords[$i]['status']                 = strip_tags($row->status);	
				$i++;
				}			
			}
			return $detailrecords;
		}
		
		public function deletefeemaster($mysqli,$id) 
		{
			$date  = date('Y-m-d'); 
	    	$qry = 'UPDATE  feesmaster  SET status="1"  WHERE feesid="'.mysqli_real_escape_string($mysqli,$id).'"'; 
    		$res =$mysqli->query($qry)or die("Error in delete query".$mysqli->error);	
		} 	

		
		/* school Details Start */ 
		public function addschool($mysqli) 
		{
			$date  = date('Y-m-d');
			
			if (isset($_POST['schoolname'])) {
			$schoolname             = mysqli_real_escape_string($mysqli,$_POST['schoolname']);		
			}	
			if (isset($_POST['address1'])) {
			$address1               = mysqli_real_escape_string($mysqli,$_POST['address1']);		
			}
			if (isset($_POST['address2'])) {
			$address2               = mysqli_real_escape_string($mysqli,$_POST['address2']);		
			}
			if (isset($_POST['pincode'])) {
			$pincode                = mysqli_real_escape_string($mysqli,$_POST['pincode']);		
			}
			if (isset($_POST['landmark'])) {
			$landmark               = mysqli_real_escape_string($mysqli,$_POST['landmark']);		
			}
			if (isset($_POST['district'])) {
			$district               = mysqli_real_escape_string($mysqli,$_POST['district']);		
			}
			if (isset($_POST['state'])) {
			$state                  = mysqli_real_escape_string($mysqli,$_POST['state']);		
			}
			if (isset($_POST['email'])) {
			$email                  = mysqli_real_escape_string($mysqli,$_POST['email']);		
			}
			if (isset($_POST['website'])) {
			$website                = mysqli_real_escape_string($mysqli,$_POST['website']);		
			}			
			if (isset($_POST['phonenumber'])) {
			$phonenumber            = mysqli_real_escape_string($mysqli,$_POST['phonenumber']);		
			}
			if (isset($_POST['landlinecode'])) {
			$landlinecode           = mysqli_real_escape_string($mysqli,$_POST['landlinecode']);		
			}
			if (isset($_POST['landlinenumber'])) {
			$landlinenumber         = mysqli_real_escape_string($mysqli,$_POST['landlinenumber']);		
		    }
			if(isset($_POST['schoolactive']) &&    $_POST['schoolactive'] == 'Yes')		
			{
				$status=0;
			}
			else
			{
				$status=1;
			}	
		
			$qry = "INSERT INTO school(schoolname,address1,address2,pincode,landmark,district,state,email,website,phonenumber,landlinecode,landlinenumber,status) 
					VALUES ('".strip_tags($schoolname)."','".strip_tags($address1)."','".strip_tags($address2)."','".strip_tags($pincode)."','".strip_tags($landmark)."',
					'".strip_tags($district)."','".strip_tags($state)."','".strip_tags($email)."','".strip_tags($website)."','".strip_tags($phonenumber)."','".strip_tags($landlinecode)."'
					,'".strip_tags($landlinenumber)."','".strip_tags($status)."');";		
		
			$res =$mysqli->query($qry)or die("Error in Query".$mysqli->error);
			$id = 0;
			$id = $mysqli->insert_id;
		
			return $id; 
		}
		public function deleteschool($mysqli,$id) 
		{
			$date  = date('Y-m-d'); 
	    	$qry = 'UPDATE  school  SET status="1"  WHERE id="'.mysqli_real_escape_string($mysqli,$id).'"'; 
    		$res =$mysqli->query($qry)or die("Error in delete query".$mysqli->error);	
		} 	

			
		public function getschool($mysqli,$idupd) 
		{
			$qry = "SELECT * FROM school WHERE id='".mysqli_real_escape_string($mysqli,$idupd)."'"; 
			$res =$mysqli->query($qry)or die("Error in Get All Records".$mysqli->error);
			$detailrecords = array();
			if ($mysqli->affected_rows>0)
			{
				$row = $res->fetch_object();	
			    $detailrecords['id']                = $row->id; 
				$detailrecords['schoolname']       	= strip_tags($row->schoolname);
				$detailrecords['address1']       	= strip_tags($row->address1);
				$detailrecords['address2']       	= strip_tags($row->address2);
				$detailrecords['pincode']       	= strip_tags($row->pincode);
		    	$detailrecords['landmark']       	= strip_tags($row->landmark);
				$detailrecords['district']       	= strip_tags($row->district);
				$detailrecords['state']          	= strip_tags($row->state);
				$detailrecords['email']         	= strip_tags($row->email);
				$detailrecords['website']        	= strip_tags($row->website);
				$detailrecords['phonenumber']       = strip_tags($row->phonenumber);
				$detailrecords['landlinecode']     	= strip_tags($row->landlinecode);
				$detailrecords['landlinenumber']    = strip_tags($row->landlinenumber);
				$detailrecords['status']            = strip_tags($row->status);		
				
			}
			return $detailrecords;
		}
		public function updateschool($mysqli,$id) { 		
		//print("<pre>");
	//	print_r($_POST);
	//	print("</pre>");
	//	die;
		$date  = date('Y-m-d');
			
		if (isset($_POST['schoolname'])) {
		$schoolname             = mysqli_real_escape_string($mysqli,$_POST['schoolname']);		
		}	
		if (isset($_POST['address1'])) {
		$address1               = mysqli_real_escape_string($mysqli,$_POST['address1']);		
		}
		if (isset($_POST['address2'])) {
		$address2               = mysqli_real_escape_string($mysqli,$_POST['address2']);		
		}
		if (isset($_POST['pincode'])) {
		$pincode                = mysqli_real_escape_string($mysqli,$_POST['pincode']);		
		}
		if (isset($_POST['landmark'])) {
		$landmark               = mysqli_real_escape_string($mysqli,$_POST['landmark']);		
		}
		if (isset($_POST['district'])) {
		$district               = mysqli_real_escape_string($mysqli,$_POST['district']);		
		}
		if (isset($_POST['state'])) {
		$state                  = mysqli_real_escape_string($mysqli,$_POST['state']);		
		}
		if (isset($_POST['email'])) {
		$email                  = mysqli_real_escape_string($mysqli,$_POST['email']);		
		}
		if (isset($_POST['website'])) {
		$website                = mysqli_real_escape_string($mysqli,$_POST['website']);		
		}			
		if (isset($_POST['phonenumber'])) {
		$phonenumber            = mysqli_real_escape_string($mysqli,$_POST['phonenumber']);		
		}
		if (isset($_POST['landlinecode'])) {
		$landlinecode           = mysqli_real_escape_string($mysqli,$_POST['landlinecode']);		
		}
		if (isset($_POST['landlinenumber'])) {
		$landlinenumber         = mysqli_real_escape_string($mysqli,$_POST['landlinenumber']);		
		}
		if(isset($_POST['schoolactive']) &&    $_POST['schoolactive'] == 'Yes')		
		{
			$status=0;
		}
		else
		{
			$status=1;
		}		
    	$updateQry = 'UPDATE  school  SET schoolname="'.strip_tags($schoolname).'" ,address1="'.strip_tags($address1).'" ,		 
				 address2="'.strip_tags($address2).'", pincode="'.strip_tags($pincode).'",landmark="'.$landmark.'",				
				 district="'.$district.'",state="'.$state.'",email="'.$email.'",website="'.$website.'",	
				 phonenumber="'.$phonenumber.'",landlinecode="'.$landlinecode.'",landlinenumber="'.$landlinenumber.'",
				 status="'.$status.'"			
				 WHERE id="'.mysqli_real_escape_string($mysqli,$id).'"';  
	
		$res =$mysqli->query($updateQry)or die("Error in in update Query!.".$mysqli->error); 
				 
				  
		}	

	/* school Details End */ 



	
/* Trust Details Start */ 

	public function addtrust($mysqli) 
	{
		$date  = date('Y-m-d');
		
		if (isset($_POST['Trustname'])) {
			$Trustname             = mysqli_real_escape_string($mysqli,$_POST['Trustname']);		
			}	
			if (isset($_POST['Pannumber'])) {
			$Pannumber               = mysqli_real_escape_string($mysqli,$_POST['Pannumber']);		
			}
			if (isset($_POST['Tannumber'])) {
			$Tannumber               = mysqli_real_escape_string($mysqli,$_POST['Tannumber']);		
			}
			if (isset($_POST['Flatno'])) {
			$Flatno                = mysqli_real_escape_string($mysqli,$_POST['Flatno']);		
			}
			if (isset($_POST['Street'])) {
			$Street               = mysqli_real_escape_string($mysqli,$_POST['Street']);		
			}
			if (isset($_POST['Area'])) {
			$Area               = mysqli_real_escape_string($mysqli,$_POST['Area']);		
			}
			if (isset($_POST['District'])) {
			$District                  = mysqli_real_escape_string($mysqli,$_POST['District']);		
			}
			if (isset($_POST['Pincode'])) {
			$Pincode                  = mysqli_real_escape_string($mysqli,$_POST['Pincode']);		
			}
			
			if(isset($_POST['trustactive']) &&    $_POST['trustactive'] == 'Yes')		
			{
				$status=0;
			}
			else
			{
				$status=1;
			}	
	
		$qry = "INSERT INTO trust(trustname,pannumber,tannumber,flatno,street,area,district,pincode,status) 
				VALUES ('".strip_tags($Trustname)."','".strip_tags($Pannumber)."','".strip_tags($Tannumber)."','".strip_tags($Flatno)."','".strip_tags($Street)."',
				'".strip_tags($Area)."','".strip_tags($District)."','".strip_tags($Pincode)."','".strip_tags($status)."');";		
	
		$res =$mysqli->query($qry)or die("Error in Query".$mysqli->error);
		$id = 0;
		$id = $mysqli->insert_id;
	
		return $id; 
	}
	public function deletetrust($mysqli,$id) 
	{
		$date  = date('Y-m-d'); 
		$qry = 'UPDATE  trust  SET status="1"  WHERE trustid="'.mysqli_real_escape_string($mysqli,$id).'"'; 
		$res =$mysqli->query($qry)or die("Error in delete query".$mysqli->error);	
	} 	

		
	public function gettrust($mysqli,$idupd) 
	{
		$qry = "SELECT * FROM trust WHERE trustid ='".mysqli_real_escape_string($mysqli,$idupd)."'"; 
		$res =$mysqli->query($qry)or die("Error in Get All Records".$mysqli->error);
		$detailrecords = array();
		if ($mysqli->affected_rows>0)
		{
			$row = $res->fetch_object();	
			$detailrecords['trustid']           = $row->trustid ; 
			$detailrecords['trustname']       	= strip_tags($row->trustname);
			$detailrecords['pannumber']       	= strip_tags($row->pannumber);
			$detailrecords['tannumber']       	= strip_tags($row->tannumber);
			$detailrecords['flatno']         	= strip_tags($row->flatno);
			$detailrecords['street']        	= strip_tags($row->street);
			$detailrecords['area']          	= strip_tags($row->area);
			$detailrecords['district']      	= strip_tags($row->district);
			$detailrecords['pincode']         	= strip_tags($row->pincode);		
			$detailrecords['status']            = strip_tags($row->status);		
			
		}
		return $detailrecords;
	}
	public function updatetrust($mysqli,$id) { 		
	//print("<pre>");
//	print_r($_POST);
//	print("</pre>");
//	die;
	$date  = date('Y-m-d');
		
		
	if (isset($_POST['Trustname'])) {
		$Trustname             = mysqli_real_escape_string($mysqli,$_POST['Trustname']);		
		}	
		if (isset($_POST['Pannumber'])) {
		$Pannumber               = mysqli_real_escape_string($mysqli,$_POST['Pannumber']);		
		}
		if (isset($_POST['Tannumber'])) {
		$Tannumber               = mysqli_real_escape_string($mysqli,$_POST['Tannumber']);		
		}
		if (isset($_POST['Flatno'])) {
		$Flatno                = mysqli_real_escape_string($mysqli,$_POST['Flatno']);		
		}
		if (isset($_POST['Street'])) {
		$Street               = mysqli_real_escape_string($mysqli,$_POST['Street']);		
		}
		if (isset($_POST['Area'])) {
		$Area               = mysqli_real_escape_string($mysqli,$_POST['Area']);		
		}
		if (isset($_POST['District'])) {
		$District                  = mysqli_real_escape_string($mysqli,$_POST['District']);		
		}
		if (isset($_POST['Pincode'])) {
		$Pincode                  = mysqli_real_escape_string($mysqli,$_POST['Pincode']);		
		}
		
		if(isset($_POST['trustactive']) &&    $_POST['trustactive'] == 'Yes')		
		{
			$status=0;
		}
		else
		{
			$status=1;
		}
	$updateQry = 'UPDATE  trust  SET trustname="'.strip_tags($Trustname).'" ,pannumber="'.strip_tags($Pannumber).'" ,		 
	tannumber="'.strip_tags($Tannumber).'", flatno="'.strip_tags($Flatno).'",street="'.$Street.'",				
	area="'.$Area.'",district="'.$District.'",pincode="'.$Pincode.'", status="'.$status.'"			
			 WHERE trustid="'.mysqli_real_escape_string($mysqli,$id).'"';  

	$res =$mysqli->query($updateQry)or die("Error in in update Query!.".$mysqli->error); 
			 
			  
	}	

/* Trust Details End */ 


	
/* Holiday Details Start */ 

public function addholiday($mysqli) 
{
	$date  = date('Y-m-d');
	
	if (isset($_POST['Holidaytype'])) {
		$Holidaytype                    = mysqli_real_escape_string($mysqli,$_POST['Holidaytype']);		
		}	
		if (isset($_POST['Holidaystartdate'])) {
		$Holidaystartdate               = mysqli_real_escape_string($mysqli,$_POST['Holidaystartdate']);		
		}
		if (isset($_POST['Holidayenddate'])) {
		$Holidayenddate                 = mysqli_real_escape_string($mysqli,$_POST['Holidayenddate']);		
		}
		if (isset($_POST['Description'])) {
		$Description                    = mysqli_real_escape_string($mysqli,$_POST['Description']);		
		}
		if(isset($_POST['Holidayactive']) &&    $_POST['Holidayactive'] == 'Yes')		
		{
			$status=0;
		}
		else
		{
			$status=1;
		}	

	$qry = "INSERT INTO holiday(holidaytype,holidaystartdate,holidayenddate,description,status) 
			VALUES ('".strip_tags($Holidaytype)."','".strip_tags($Holidaystartdate)."','".strip_tags($Holidayenddate)."','".strip_tags($Description)."',
			'".strip_tags($status)."');";		

	$res =$mysqli->query($qry)or die("Error in Query".$mysqli->error);
	$id = 0;
	$id = $mysqli->insert_id;

	return $id; 
}
public function deleteholiday($mysqli,$id) 
{
	$date  = date('Y-m-d'); 
	$qry = 'UPDATE  holiday  SET status="1"  WHERE holidayid="'.mysqli_real_escape_string($mysqli,$id).'"'; 
	$res =$mysqli->query($qry)or die("Error in delete query".$mysqli->error);	
} 	

	
public function getholiday($mysqli,$idupd) 
{
	$qry = "SELECT * FROM holiday WHERE holidayid ='".mysqli_real_escape_string($mysqli,$idupd)."'"; 
	$res =$mysqli->query($qry)or die("Error in Get All Records".$mysqli->error);
	$detailrecords = array();
	if ($mysqli->affected_rows>0)
	{
		$row = $res->fetch_object();	
		$detailrecords['holidayid']         = $row->holidayid ; 
		$detailrecords['holidaytype']       = strip_tags($row->holidaytype);
		$detailrecords['holidaystartdate'] 	= strip_tags($row->holidaystartdate);
		$detailrecords['holidayenddate']    = strip_tags($row->holidayenddate);
		$detailrecords['description']       = strip_tags($row->description);				
		$detailrecords['status']            = strip_tags($row->status);		
		
	}
	return $detailrecords;
}
public function updateholiday($mysqli,$id) { 		
//print("<pre>");
//	print_r($_POST);
//	print("</pre>");
//	die;
$date  = date('Y-m-d');
	
	if (isset($_POST['Holidaytype'])) {
		$Holidaytype                    = mysqli_real_escape_string($mysqli,$_POST['Holidaytype']);		
		}	
		if (isset($_POST['Holidaystartdate'])) {
		$Holidaystartdate               = mysqli_real_escape_string($mysqli,$_POST['Holidaystartdate']);		
		}
		if (isset($_POST['Holidayenddate'])) {
		$Holidayenddate                 = mysqli_real_escape_string($mysqli,$_POST['Holidayenddate']);		
		}
		if (isset($_POST['Description'])) {
		$Description                    = mysqli_real_escape_string($mysqli,$_POST['Description']);		
		}
		if(isset($_POST['Holidayactive']) &&    $_POST['Holidayactive'] == 'Yes')		
		{
			$status=0;
		}
		else
		{
			$status=1;
		}	
$updateQry = 'UPDATE  holiday  SET holidaytype="'.strip_tags($Holidaytype).'" ,	holidaystartdate="'.strip_tags($Holidaystartdate).'" ,		 
holidayenddate="'.strip_tags($Holidayenddate).'", description="'.strip_tags($Description).'",status="'.$status.'"			
		 WHERE holidayid="'.mysqli_real_escape_string($mysqli,$id).'"';  

$res =$mysqli->query($updateQry)or die("Error in in update Query!.".$mysqli->error); 
		 
		  
}	

/* Holiday Details End */ 


/* Subject Details Start */ 

public function addsubject($mysqli) 
{
	$date  = date('Y-m-d');
	
	if (isset($_POST['subject'])) {
		$subject                        = mysqli_real_escape_string($mysqli,$_POST['subject']);		
		}	
		if (isset($_POST['subjectcode'])) {
		$subjectcode                    = mysqli_real_escape_string($mysqli,$_POST['subjectcode']);		
		}
		if (isset($_POST['subjecttype'])) {
		$subjecttype                    = mysqli_real_escape_string($mysqli,$_POST['subjecttype']);		
		}	
		if(isset($_POST['subjectactive']) &&    $_POST['subjectactive'] == 'Yes')		
		{
			$status=0;
		}
		else
		{
			$status=1;
		}	

	$qry = "INSERT INTO subject(subject,subjectcode,subjecttype,status) 
			VALUES ('".strip_tags($subject)."','".strip_tags($subjectcode)."','".strip_tags($subjecttype)."',
			'".strip_tags($status)."');";		

	$res =$mysqli->query($qry)or die("Error in Query".$mysqli->error);
	$id = 0;
	$id = $mysqli->insert_id;

	return $id; 
}
public function deletesubject($mysqli,$id) 
{
	$date  = date('Y-m-d'); 
	$qry = 'UPDATE  subject  SET status="1"  WHERE subjectid ="'.mysqli_real_escape_string($mysqli,$id).'"'; 
	$res =$mysqli->query($qry)or die("Error in delete query".$mysqli->error);	
} 	

	
public function getsubject($mysqli,$idupd) 
{
	$qry = "SELECT * FROM subject WHERE subjectid  ='".mysqli_real_escape_string($mysqli,$idupd)."'"; 
	$res =$mysqli->query($qry)or die("Error in Get All Records".$mysqli->error);
	$detailrecords = array();
	if ($mysqli->affected_rows>0)
	{
		$row = $res->fetch_object();	
		$detailrecords['subjectid']         = $row->subjectid; 
		$detailrecords['subject']           = strip_tags($row->subject);
		$detailrecords['subjectcode']    	= strip_tags($row->subjectcode);
		$detailrecords['subjecttype']       = strip_tags($row->subjecttype);			
		$detailrecords['status']            = strip_tags($row->status);		
		
	}
	return $detailrecords;
}
public function updatesubject($mysqli,$id) { 		
//print("<pre>");
//	print_r($_POST);
//	print("</pre>");
//	die;
$date  = date('Y-m-d');
	
	if (isset($_POST['subject'])) {
		$subject                        = mysqli_real_escape_string($mysqli,$_POST['subject']);		
		}	
		if (isset($_POST['subjectcode'])) {
		$subjectcode                    = mysqli_real_escape_string($mysqli,$_POST['subjectcode']);		
		}
		if (isset($_POST['subjecttype'])) {
		$subjecttype                    = mysqli_real_escape_string($mysqli,$_POST['subjecttype']);		
		}	
		if(isset($_POST['subjectactive']) &&    $_POST['subjectactive'] == 'Yes')		
		{
			$status=0;
		}
		else
		{
			$status=1;
		}	
$updateQry = 'UPDATE  subject  SET subject="'.strip_tags($subject).'" ,	subjectcode="'.strip_tags($subjectcode).'" ,		 
subjecttype="'.strip_tags($subjecttype).'", status="'.$status.'"			
		 WHERE subjectid ="'.mysqli_real_escape_string($mysqli,$id).'"';  

$res =$mysqli->query($updateQry)or die("Error in in update Query!.".$mysqli->error); 
		 
		  
}	

/* Subject Details End */ 



/* Subject Group Start */ 

public function addsubjectgroup($mysqli) 
{
	//print("<pre>");
	//print_r($_POST);
	//print("</pre>");
	//die;
	$date  = date('Y-m-d');
	
	    if (isset($_POST['standard'])) {
		$standard                     = mysqli_real_escape_string($mysqli,$_POST['standard']);		
		}	
		if (isset($_POST['groupname'])) {
		$groupname                    = mysqli_real_escape_string($mysqli,$_POST['groupname']);		
		}
		if (isset($_POST['section'])) {
		$section                      = $_POST['section'];		
		$section                      = implode(",",$section);
		}	
		if (isset($_POST['subject'])) {
			$subject                  = $_POST['subject'];	
			$subject                  = implode(",",$subject);	
		}	
		if(isset($_POST['subjectgroupactive']) &&    $_POST['subjectgroupactive'] == 'Yes')		
		{
			$status=0;
		}
		else
		{
			$status=1;
		}	

	$qry = "INSERT INTO subjectgroup(standard,groupname,section,subject,status) 
			VALUES ('".strip_tags($standard)."','".strip_tags($groupname)."','".strip_tags($section)."',
			'".strip_tags($subject)."','".strip_tags($status)."');";		

	$res =$mysqli->query($qry)or die("Error in Query".$mysqli->error);
	$id = 0;
	$id = $mysqli->insert_id;

	return $id; 
}
public function deletesubjectgroup($mysqli,$id) 
{
	$date  = date('Y-m-d'); 
	$qry = 'UPDATE  subjectgroup  SET status="1"  WHERE subjectgroupid ="'.mysqli_real_escape_string($mysqli,$id).'"'; 
	$res =$mysqli->query($qry)or die("Error in delete query".$mysqli->error);	
} 	

	
public function getsubjectgroup($mysqli,$idupd) 
{
	$qry = "SELECT * FROM subjectgroup WHERE subjectgroupid  ='".mysqli_real_escape_string($mysqli,$idupd)."'"; 
	$res =$mysqli->query($qry)or die("Error in Get All Records".$mysqli->error);
	$detailrecords = array();
	if ($mysqli->affected_rows>0)
	{
		$row = $res->fetch_object();	
		$detailrecords['subjectgroupid']         = $row->subjectgroupid; 
		$detailrecords['standard']               = strip_tags($row->standard);
		$detailrecords['groupname']    	         = strip_tags($row->groupname);
		$detailrecords['section']                = strip_tags($row->section);	
		$detailrecords['subject']                = strip_tags($row->subject);		
		$detailrecords['status']                 = strip_tags($row->status);		
		
	}
	return $detailrecords;
}

public function getsubjectstatus($mysqli) 
{
	
	$qry = "SELECT * FROM subject WHERE status  ='0' "; 
	$res =$mysqli->query($qry)or die("Error in Get All Records".$mysqli->error);
	
	$detailrecords = array();
	$i = 0;
	if ($mysqli->affected_rows>0)
	{
		while($row = $res->fetch_object()) 	
    	{				
		$detailrecords[$i]['subject']                = strip_tags($row->subject);			
		$i++;
		}
	}
	return $detailrecords;
}
public function updatesubjectgroup($mysqli,$id) { 		
   
	$date  = date('Y-m-d');
	
	    if (isset($_POST['standard'])) {
		$standard                     = mysqli_real_escape_string($mysqli,$_POST['standard']);		
		}	
		if (isset($_POST['groupname'])) {
		$groupname                    = mysqli_real_escape_string($mysqli,$_POST['groupname']);		
		}
		if (isset($_POST['subject'])) {
			$subject                  = $_POST['subject'];	
			$subject                  = implode(",",$subject);	
		}	
		else{
			$subject="";
		}
		if (isset($_POST['section'])) {
		$section                      = $_POST['section'];		
		$section                      = implode(",",$section);
		}	
		else{
			$section="";
		}
		if(isset($_POST['subjectgroupactive']) &&    $_POST['subjectgroupactive'] == 'Yes')		
		{
			$status=0;
		}
		else
		{
			$status=1;
		}	
$updateQry = 'UPDATE  subjectgroup  SET standard="'.strip_tags($standard).'" ,	groupname="'.strip_tags($groupname).'" ,subject="'.strip_tags($subject).'" ,		 
section="'.strip_tags($section).'", status="'.$status.'"			
		 WHERE subjectgroupid ="'.mysqli_real_escape_string($mysqli,$id).'"';  

$res =$mysqli->query($updateQry)or die("Error in in update Query!.".$mysqli->error); 
		 
		 
}	

/* Subject Group End */ 



/* Staff Group Start */ 

public function addstaff($mysqli) 
{
	if (isset($_POST['firstname'])) {
		$firstname  = mysqli_real_escape_string($mysqli,$_POST['firstname']);		
		}	
	    if (isset($_POST['middlename'])) {
		$middlename = mysqli_real_escape_string($mysqli,$_POST['middlename']);		
		}	
        if (isset($_POST['lastname'])) {
		$lastname   = mysqli_real_escape_string($mysqli,$_POST['lastname']);		
		}	
        if (isset($_POST['staffnumber'])) {
		$staffnumber = mysqli_real_escape_string($mysqli,$_POST['staffnumber']);		
		}
		if (isset($_POST['gender'])) {
		$gender      = mysqli_real_escape_string($mysqli,$_POST['gender']);		
		}
		if (isset($_POST['bloodgroup'])) {
		$bloodgroup = mysqli_real_escape_string($mysqli,$_POST['bloodgroup']);		
		}
	    if (isset($_POST['staffroll'])) {
		$staffroll = mysqli_real_escape_string($mysqli,$_POST['staffroll']);		
		}
		if (isset($_POST['qualification'])) {
		$qualification = mysqli_real_escape_string($mysqli,$_POST['qualification']);		
		}
		if (isset($_POST['email'])) {
		$email = mysqli_real_escape_string($mysqli,$_POST['email']);		
		}
		if (isset($_POST['pan'])) {
		$pan    = mysqli_real_escape_string($mysqli,$_POST['pan']);		
		}
		if (isset($_POST['pfnumber'])) {
		$pfnumber = mysqli_real_escape_string($mysqli,$_POST['pfnumber']);		
		}
		if (isset($_POST['contactnumber'])) {
		$contactnumber = mysqli_real_escape_string($mysqli,$_POST['contactnumber']);		
		}
		if (isset($_POST['dateofjoining'])) {
		$dateofjoining = mysqli_real_escape_string($mysqli,$_POST['dateofjoining']);		
		}
		
    	

		if (isset($_POST['appointmentletter'])) {
		$appointmentletter = mysqli_real_escape_string($mysqli,$_POST['appointmentletter']);		
		}
		if (isset($_POST['aadharnumber'])) {
		$aadharnumber = mysqli_real_escape_string($mysqli,$_POST['aadharnumber']);		
		}
		if (isset($_POST['emergencycontactperson'])) {
		$emergencycontactperson = mysqli_real_escape_string($mysqli,$_POST['emergencycontactperson']);		
		}
		if (isset($_POST['emergencycontactnumber'])) {
		$emergencycontactnumber = mysqli_real_escape_string($mysqli,$_POST['emergencycontactnumber']);		
		}
		if (isset($_POST['transportation'])) {
		$transportation = mysqli_real_escape_string($mysqli,$_POST['transportation']);		
		}
		if (isset($_POST['flatNumber'])) {
		$flatNumber = mysqli_real_escape_string($mysqli,$_POST['flatNumber']);		
		}
		if (isset($_POST['bankname'])) {
		$bankname = mysqli_real_escape_string($mysqli,$_POST['bankname']);		
		}
		
		if (isset($_POST['staffpicture'])) {
		$staffpicture = mysqli_real_escape_string($mysqli,$_POST['staffpicture']);		
		}
		if (isset($_POST['area'])) {
		$area = mysqli_real_escape_string($mysqli,$_POST['area']);		
		}
		if (isset($_POST['accountnumber'])) {
		$accountnumber = mysqli_real_escape_string($mysqli,$_POST['accountnumber']);		
		}
		
		if (isset($_POST['district'])) {
		$district = mysqli_real_escape_string($mysqli,$_POST['district']);		
		}
		if (isset($_POST['branch'])) {
		$branch = mysqli_real_escape_string($mysqli,$_POST['branch']);		
		}
		if (isset($_POST['pincode'])) {
		$pincode = mysqli_real_escape_string($mysqli,$_POST['pincode']);		
		}
		
		if (isset($_POST['ifsccode'])) {
		$ifsccode = mysqli_real_escape_string($mysqli,$_POST['ifsccode']);		
		}
		if (isset($_POST['basicpay'])) {
		$basicpay = mysqli_real_escape_string($mysqli,$_POST['basicpay']);		
		}
		if (isset($_POST['detection'])) {
		$detection = mysqli_real_escape_string($mysqli,$_POST['detection']);		
		}
		
		if (isset($_POST['detectionamount'])) {
		$detectionamount = mysqli_real_escape_string($mysqli,$_POST['detectionamount']);		
		}
		if (isset($_POST['hra'])) {
		$hra = mysqli_real_escape_string($mysqli,$_POST['hra']);		
		}
		if (isset($_POST['grosspay'])) {
		$grosspay = mysqli_real_escape_string($mysqli,$_POST['grosspay']);		
		}

        if (isset($_POST['netamount'])) {
		$netamount = mysqli_real_escape_string($mysqli,$_POST['netamount']);		
		}
		if (isset($_POST['transportallowance'])) {
		$transportallowance = mysqli_real_escape_string($mysqli,$_POST['transportallowance']);		
		}
		if (isset($_POST['medicalallowance'])) {
		$medicalallowance = mysqli_real_escape_string($mysqli,$_POST['medicalallowance']);		
		}
 
        if (isset($_POST['specialpay'])) {
		$specialpay = mysqli_real_escape_string($mysqli,$_POST['specialpay']);		
		}
		if (isset($_POST['title1'])) {
		$title1 = mysqli_real_escape_string($mysqli,$_POST['title1']);		
		}
		if (isset($_POST['name1'])) {
		$name1 = mysqli_real_escape_string($mysqli,$_POST['name1']);		
		}
        if (isset($_POST['issuedby1'])) {
		$issuedby1 = mysqli_real_escape_string($mysqli,$_POST['issuedby1']);		
		}

        if (isset($_POST['title2'])) {
		$title2 = mysqli_real_escape_string($mysqli,$_POST['title2']);		
		}
		if (isset($_POST['name2'])) {
		$name2 = mysqli_real_escape_string($mysqli,$_POST['name2']);		
		}
		if (isset($_POST['issuedby2'])) {
		$issuedby2 = mysqli_real_escape_string($mysqli,$_POST['issuedby2']);		
		}
        if (isset($_POST['title3'])) {
		$title3 = mysqli_real_escape_string($mysqli,$_POST['title3']);		
		}
       	if (isset($_POST['name3'])) {
		$name3 = mysqli_real_escape_string($mysqli,$_POST['name3']);		
		}
		if (isset($_POST['issuedby3'])) {
		$issuedby3 = mysqli_real_escape_string($mysqli,$_POST['issuedby3']);		
		}
        if (isset($_POST['documentpath'])) {
		$documentpath = mysqli_real_escape_string($mysqli,$_POST['documentpath']);		
		}
   
	    if(isset($_POST['staffactive']) &&    $_POST['staffactive'] == 'Yes')		
		{
		$status    = 0;
		}
		else
		{
		$status    = 1;

	
		}


	//	echo '<pre>';
//	print_r($_POST);
 //	print_r($_FILES);
 //echo '</pre>';    
//die;
	
/* Staff Image Upload Start	*/   
$staffpicture1 =$_FILES["staffpicture"]["name"];
if(isset($staffpicture1))
{
	$staffpicture3 = "uploads/staffphoto/".$staffpicture1 ;
	move_uploaded_file($_FILES['staffpicture']['tmp_name'],$staffpicture3);

	
	$staffphoto = rtrim($staffpicture1, '*'); //imagepath if it is present    
 
}
else
{
$staffphoto="";
} 
/* Staff Document Upload Start	*/   
$staffdocumentpath1 =$_FILES["documentpath"]["name"];
if(isset($staffdocumentpath1))
{
	$staffdocumentpath3 = "uploads/staffdocument/".$staffdocumentpath1 ;
	move_uploaded_file($_FILES['documentpath']['tmp_name'],$staffdocumentpath3);

	
	$staffdocument = rtrim($staffdocumentpath1, '*'); //imagepath if it is present    
 
}
else
{
$staffdocument="";
} 


	$qry = " INSERT INTO staff(firstname,middlename,lastname,employeenumber,
	gender,bloodgroup,staffroll,qualification,email,
	pan,pfnumber,contactnumber,dateofjoining,appointmentletter,aadhaarnumber,
	emergencycontactperson,emergencycontactnumber,transportation,flatno,
	area,district,pincode,bankname,accountnumber,branch,
	ifsccode,staffpath,basicpay,detection,detectionamount,
	hra,grosspay,netamount,transportallowance,medicalallowance,
	specialpay,title1,name1,issuedby1,
	title2,name2,issuedby2,
	title3,name3,issuedby3,documentpath,status) 
VALUES ('".strip_tags($firstname)."','".strip_tags($middlename)."','".strip_tags($lastname)."','".strip_tags($staffnumber)."',
'".strip_tags($gender)."','".strip_tags($bloodgroup)."','".strip_tags($staffroll)."','".strip_tags($qualification)."',  
'".strip_tags($email)."','".strip_tags($pan)."', '".strip_tags($pfnumber)."','".strip_tags($contactnumber)."', 
'".strip_tags($dateofjoining)."', '".strip_tags($appointmentletter)."','".strip_tags($aadharnumber)."','".strip_tags($emergencycontactperson)."', 
'".strip_tags($emergencycontactnumber)."', '".strip_tags($transportation)."', '".strip_tags($flatNumber)."', 
'".strip_tags($area)."','".strip_tags($district)."','".strip_tags($pincode)."',
'".strip_tags($bankname)."','".strip_tags($accountnumber)."','".strip_tags($branch)."',  
'".strip_tags($ifsccode)."','".strip_tags($staffphoto)."','".strip_tags($basicpay)."',   
'".strip_tags($detection)."', '".strip_tags($detectionamount)."', '".strip_tags($hra)."', '".strip_tags($grosspay)."', 
'".strip_tags($netamount)."', '".strip_tags($transportallowance)."', '".strip_tags($medicalallowance)."', '".strip_tags($specialpay)."', 
'".strip_tags($title1)."', '".strip_tags($name1)."', '".strip_tags($issuedby1)."', 
'".strip_tags($title2)."', '".strip_tags($name2)."', '".strip_tags($issuedby2)."',
'".strip_tags($title3)."', '".strip_tags($name3)."', '".strip_tags($issuedby3)."', 
'".strip_tags($staffdocument)."', '".strip_tags($status)."'
); ";		
//echo $qry;
//die;
	$res =$mysqli->query($qry)or die("Error in Query".$mysqli->error);
	$id = 0;
	$id = $mysqli->insert_id;

	return $id; 
}
public function deletestaff($mysqli,$id) 
{
	$date  = date('Y-m-d'); 
	$qry = 'UPDATE  staff  SET status="1"  WHERE staffid  ="'.mysqli_real_escape_string($mysqli,$id).'"'; 
	$res =$mysqli->query($qry)or die("Error in delete query".$mysqli->error);	
} 	

	
public function getstaff($mysqli,$idupd) 
{
	$qry = "SELECT * FROM staff WHERE staffid  ='".mysqli_real_escape_string($mysqli,$idupd)."'"; 
	$res =$mysqli->query($qry)or die("Error in Get All Records".$mysqli->error);
	$detailrecords = array();
	if ($mysqli->affected_rows>0)
	{
		$row = $res->fetch_object();	

		$detailrecords['staffid']                = $row->staffid; 
		$detailrecords['firstname']              = strip_tags($row->firstname);
		$detailrecords['middlename']    	     = strip_tags($row->middlename);
		$detailrecords['lastname']               = strip_tags($row->lastname);	
		$detailrecords['employeenumber']         = strip_tags($row->employeenumber);		
		
		$detailrecords['gender']                 = strip_tags($row->gender);	
		$detailrecords['bloodgroup']             = strip_tags($row->bloodgroup);
		$detailrecords['staffroll']              = strip_tags($row->staffroll);
		$detailrecords['qualification']          = strip_tags($row->qualification);	
		$detailrecords['email']                  = strip_tags($row->email);

		$detailrecords['pan']                    = strip_tags($row->pan);	
		$detailrecords['pfnumber']               = strip_tags($row->pfnumber);
		$detailrecords['contactnumber']          = strip_tags($row->contactnumber);
		$detailrecords['dateofjoining']          = strip_tags($row->dateofjoining);	
		$detailrecords['appointmentletter']      = strip_tags($row->appointmentletter);
		$detailrecords['aadhaarnumber']          = strip_tags($row->aadhaarnumber);

		
		$detailrecords['emergencycontactperson'] = strip_tags($row->emergencycontactperson);	
		$detailrecords['emergencycontactnumber'] = strip_tags($row->emergencycontactnumber);
		$detailrecords['transportation']         = strip_tags($row->transportation);
		$detailrecords['flatno']                 = strip_tags($row->flatno);	
		$detailrecords['area']                   = strip_tags($row->area);
	
		$detailrecords['district']               = strip_tags($row->district);	
		$detailrecords['pincode']                = strip_tags($row->pincode);
		$detailrecords['bankname']               = strip_tags($row->bankname);
		$detailrecords['accountnumber']          = strip_tags($row->accountnumber);	
		$detailrecords['branch']                 = strip_tags($row->branch);
	
		$detailrecords['ifsccode']               = strip_tags($row->ifsccode);	
		$detailrecords['staffpath']              = strip_tags($row->staffpath);
		$detailrecords['basicpay']               = strip_tags($row->basicpay);
		$detailrecords['detection']              = strip_tags($row->detection);	
		$detailrecords['detectionamount']        = strip_tags($row->detectionamount);
			   
		$detailrecords['hra']                    = strip_tags($row->hra);	
		$detailrecords['grosspay']               = strip_tags($row->grosspay);
		$detailrecords['netamount']              = strip_tags($row->netamount);
		$detailrecords['transportallowance']     = strip_tags($row->transportallowance);	
		$detailrecords['medicalallowance']       = strip_tags($row->medicalallowance);

		$detailrecords['specialpay']             = strip_tags($row->specialpay);	
		$detailrecords['title1']                 = strip_tags($row->title1);
		$detailrecords['name1']                  = strip_tags($row->name1);
		$detailrecords['issuedby1']              = strip_tags($row->issuedby1);	
		
		$detailrecords['title2']                 = strip_tags($row->title2);
		$detailrecords['name2']                  = strip_tags($row->name2);
		$detailrecords['issuedby2']              = strip_tags($row->issuedby2);	    	

		$detailrecords['title3']                 = strip_tags($row->title3);
		$detailrecords['name3']                  = strip_tags($row->name3);
		$detailrecords['issuedby3']              = strip_tags($row->issuedby3);	  
		$detailrecords['documentpath']           = strip_tags($row->documentpath);	
		$detailrecords['status']                 = strip_tags($row->status);	

	}
	return $detailrecords;
}


public function updatestaff($mysqli,$id) { 		
   
	$date  = date('Y-m-d');
	
	if (isset($_POST['firstname'])) {
		$firstname  = mysqli_real_escape_string($mysqli,$_POST['firstname']);		
		}	
	    if (isset($_POST['middlename'])) {
		$middlename = mysqli_real_escape_string($mysqli,$_POST['middlename']);		
		}	
        if (isset($_POST['lastname'])) {
		$lastname   = mysqli_real_escape_string($mysqli,$_POST['lastname']);		
		}	
        if (isset($_POST['staffnumber'])) {
		$employeenumber = mysqli_real_escape_string($mysqli,$_POST['staffnumber']);		
		}
		if (isset($_POST['gender'])) {
		$gender      = mysqli_real_escape_string($mysqli,$_POST['gender']);		
		}
		if (isset($_POST['bloodgroup'])) {
		$bloodgroup = mysqli_real_escape_string($mysqli,$_POST['bloodgroup']);		
		}
	    if (isset($_POST['staffroll'])) {
		$staffroll = mysqli_real_escape_string($mysqli,$_POST['staffroll']);		
		}
		if (isset($_POST['qualification'])) {
		$qualification = mysqli_real_escape_string($mysqli,$_POST['qualification']);		
		}
		if (isset($_POST['email'])) {
		$email = mysqli_real_escape_string($mysqli,$_POST['email']);		
		}
		if (isset($_POST['pan'])) {
		$pan    = mysqli_real_escape_string($mysqli,$_POST['pan']);		
		}
		if (isset($_POST['pfnumber'])) {
		$pfnumber = mysqli_real_escape_string($mysqli,$_POST['pfnumber']);		
		}
		if (isset($_POST['contactnumber'])) {
		$contactnumber = mysqli_real_escape_string($mysqli,$_POST['contactnumber']);		
		}
		if (isset($_POST['dateofjoining'])) {
		$dateofjoining = mysqli_real_escape_string($mysqli,$_POST['dateofjoining']);		
		}
		
    	

		if (isset($_POST['appointmentletter'])) {
		$appointmentletter = mysqli_real_escape_string($mysqli,$_POST['appointmentletter']);		
		}
		if (isset($_POST['aadharnumber'])) {
		$aadharnumber = mysqli_real_escape_string($mysqli,$_POST['aadharnumber']);		
		}
		if (isset($_POST['emergencycontactperson'])) {
		$emergencycontactperson = mysqli_real_escape_string($mysqli,$_POST['emergencycontactperson']);		
		}
		if (isset($_POST['emergencycontactnumber'])) {
		$emergencycontactnumber = mysqli_real_escape_string($mysqli,$_POST['emergencycontactnumber']);		
		}
		if (isset($_POST['transportation'])) {
		$transportation = mysqli_real_escape_string($mysqli,$_POST['transportation']);		
		}
		if (isset($_POST['flatNumber'])) {
		$flatNumber = mysqli_real_escape_string($mysqli,$_POST['flatNumber']);		
		}
		if (isset($_POST['bankname'])) {
		$bankname = mysqli_real_escape_string($mysqli,$_POST['bankname']);		
		}
		
		if (isset($_POST['staffpicture'])) {
		$staffpath = mysqli_real_escape_string($mysqli,$_POST['staffpicture']);		
		}
		if (isset($_POST['area'])) {
		$area = mysqli_real_escape_string($mysqli,$_POST['area']);		
		}
		if (isset($_POST['accountnumber'])) {
		$accountnumber = mysqli_real_escape_string($mysqli,$_POST['accountnumber']);		
		}
		
		if (isset($_POST['district'])) {
		$district = mysqli_real_escape_string($mysqli,$_POST['district']);		
		}
		if (isset($_POST['branch'])) {
		$branch = mysqli_real_escape_string($mysqli,$_POST['branch']);		
		}
		if (isset($_POST['pincode'])) {
		$pincode = mysqli_real_escape_string($mysqli,$_POST['pincode']);		
		}
		
		if (isset($_POST['ifsccode'])) {
		$ifsccode = mysqli_real_escape_string($mysqli,$_POST['ifsccode']);		
		}
		if (isset($_POST['basicpay'])) {
		$basicpay = mysqli_real_escape_string($mysqli,$_POST['basicpay']);		
		}
		if (isset($_POST['detection'])) {
		$detection = mysqli_real_escape_string($mysqli,$_POST['detection']);		
		}
		
		if (isset($_POST['detectionamount'])) {
		$detectionamount = mysqli_real_escape_string($mysqli,$_POST['detectionamount']);		
		}
		if (isset($_POST['hra'])) {
		$hra = mysqli_real_escape_string($mysqli,$_POST['hra']);		
		}
		if (isset($_POST['grosspay'])) {
		$grosspay = mysqli_real_escape_string($mysqli,$_POST['grosspay']);		
		}

        if (isset($_POST['netamount'])) {
		$netamount = mysqli_real_escape_string($mysqli,$_POST['netamount']);		
		}
		if (isset($_POST['transportallowance'])) {
		$transportallowance = mysqli_real_escape_string($mysqli,$_POST['transportallowance']);		
		}
		if (isset($_POST['medicalallowance'])) {
		$medicalallowance = mysqli_real_escape_string($mysqli,$_POST['medicalallowance']);		
		}
 
        if (isset($_POST['specialpay'])) {
		$specialpay = mysqli_real_escape_string($mysqli,$_POST['specialpay']);		
		}
		if (isset($_POST['title1'])) {
		$title1 = mysqli_real_escape_string($mysqli,$_POST['title1']);		
		}
		if (isset($_POST['name1'])) {
		$name1 = mysqli_real_escape_string($mysqli,$_POST['name1']);		
		}
        if (isset($_POST['issuedby1'])) {
		$issuedby1 = mysqli_real_escape_string($mysqli,$_POST['issuedby1']);		
		}

        if (isset($_POST['title2'])) {
		$title2 = mysqli_real_escape_string($mysqli,$_POST['title2']);		
		}
		if (isset($_POST['name2'])) {
		$name2 = mysqli_real_escape_string($mysqli,$_POST['name2']);		
		}
		if (isset($_POST['issuedby2'])) {
		$issuedby2 = mysqli_real_escape_string($mysqli,$_POST['issuedby2']);		
		}
        if (isset($_POST['title3'])) {
		$title3 = mysqli_real_escape_string($mysqli,$_POST['title3']);		
		}
       	if (isset($_POST['name3'])) {
		$name3 = mysqli_real_escape_string($mysqli,$_POST['name3']);		
		}
		if (isset($_POST['issuedby3'])) {
		$issuedby3 = mysqli_real_escape_string($mysqli,$_POST['issuedby3']);		
		}
        if (isset($_POST['documentpath'])) {
		$documentpath = mysqli_real_escape_string($mysqli,$_POST['documentpath']);		
		}
   
	    if(isset($_POST['staffactive']) &&    $_POST['staffactive'] == 'Yes')		
		{
		$status    = 0;
		}
		else
		{
		$status    = 1;
		}
$updateQry = '	UPDATE  staff  SET 
firstname="'.strip_tags($firstname).'" ,middlename="'.strip_tags($middlename).'" ,lastname="'.strip_tags($lastname).'" ,employeenumber="'.strip_tags($employeenumber).'",
gender="'.$gender.'",bloodgroup="'.$bloodgroup.'",staffroll="'.$staffroll.'",qualification="'.$qualification.'",email="'.$email.'",		
pan="'.$pan.'",pfnumber="'.$pfnumber.'",contactnumber="'.$contactnumber.'",dateofjoining="'.$dateofjoining.'",appointmentletter="'.$appointmentletter.'",aadhaarnumber="'.$aadharnumber.'",
emergencycontactperson="'.$emergencycontactperson.'",emergencycontactnumber="'.$emergencycontactnumber.'",transportation="'.$transportation.'",flatno="'.$flatNumber.'",
area="'.$area.'",district="'.$district.'",pincode="'.$pincode.'",bankname="'.$bankname.'",accountnumber="'.$accountnumber.'",branch="'.$branch.'",
ifsccode="'.$ifsccode.'",basicpay="'.$basicpay.'",detection="'.$detection.'",detectionamount="'.$detectionamount.'",
hra="'.$hra.'",grosspay="'.$grosspay.'",netamount="'.$netamount.'",transportallowance="'.$transportallowance.'",medicalallowance="'.$medicalallowance.'",
specialpay="'.$specialpay.'",title1="'.$title1.'",name1="'.$name1.'",issuedby1="'.$issuedby1.'",
title2="'.$title2.'",name2="'.$name2.'",issuedby2="'.$issuedby2.'",
title3="'.$title3.'",name3="'.$name3.'",issuedby3="'.$issuedby3.'",status="'.$status.'"
WHERE staffid ="'.mysqli_real_escape_string($mysqli,$id).'"   ';  

$res =$mysqli->query($updateQry)or die("Error in in update Query!.".$mysqli->error); 
		 
		 
}	

/* Staff Group End */ 


	

/*Birthday SMS*/

public function addbirthdaymessage($mysqli) 
{

	if(isset($_POST['birthdaymessage']))		
	{

	$birthdaymessage = $_POST['birthdaymessage'];
	}
	if(isset($_POST['charcount']))		
	{
	$charcount = $_POST['charcount'];
}
if(isset($_POST['messagecount']))		
{
	$messagecount = $_POST['messagecount'];
}
	
if(isset($_POST['smsactive']) &&    $_POST['smsactive'] == 'Yes')		
{
$status    = 0;
}
else
{
$status    = 1;
}

	$qry = "INSERT INTO birthday_wish(birthdaymessage,charcount,messagecount,status) 
	VALUES ('".strip_tags($birthdaymessage)."','".strip_tags($charcount)."','".strip_tags($messagecount)."',
	'".strip_tags($status)."');";		

$res =$mysqli->query($qry)or die("Error in Query".$mysqli->error);
$id = 0;
$id = $mysqli->insert_id;

return $id; 
}

public function updatesmsbirthday($mysqli,$id){	
	$date  = date('Y-m-d');

	if (isset($_POST['birthdaymessage'])) {
		$birthdaymessage = mysqli_real_escape_string($mysqli,$_POST['birthdaymessage']);		
		}	
	    if (isset($_POST['charcount'])) {
		$charcount = mysqli_real_escape_string($mysqli,$_POST['middlename']);		
		}	
        if (isset($_POST['messagecount'])) {
		$messagecount   = mysqli_real_escape_string($mysqli,$_POST['messagecount']);		
		}
		if(isset($_POST['status']) &&    $_POST['status'] == 'Yes')		
		{
		$status    = 0;
		}
		else
		{
		$status    = 1;
}	
}
/* View Caste Report*/
public function viewcastereport($mysqli,$idupd) 
{
	$qry = "SELECT region,category,gender,standard FROM student WHERE subjectid  ='".mysqli_real_escape_string($mysqli,$idupd)."'"; 
	$res =$mysqli->query($qry)or die("Error in Get All Records".$mysqli->error);
	$detailrecords = array();
	if ($mysqli->affected_rows>0)
	{
		$row = $res->fetch_object();	
		$detailrecords['region']         = $row->region;
		$detailrecords['category']       = $row->category;  
		$detailrecords['gender']         = $row->gender; 
		$detailrecords['standard']       = $row->standard; 
		
		
	}
	return $detailrecords;

}
/*Add Student Report*/
public function addstudentreport($mysqli) 
{
if(isset($_POST['studentname']))		
	{
	$studentname = $_POST['studentname'];
	}
if(isset($_POST['rollnumber']))		
	{
	$rollnumber = $_POST['rollnumber'];
    }
if(isset($_POST['standard']))		
{
	$standard = $_POST['standard'];
}
if(isset($_POST['section']))		
	{
	$section = $_POST['section'];
	}

if(isset($_POST['reportfrom']))		
{
	$reportfrom = $_POST['reportfrom'];
}
if(isset($_POST['reportto']))		
	{
	$reportto = $_POST['reportto'];
	}

if(isset($_POST['workingdays']))		
	{
	$workingdays = $_POST['workingdays'];
    }
if(isset($_POST['absent']))		
{
	$absent = $_POST['absent'];
}
if(isset($_POST['attendancepercent']))		
	{
	$attendancepercent = $_POST['attendancepercent'];
	}

if(isset($_POST['perattendance']))		
	{
	$perattendance = $_POST['perattendance'];
    }
if(isset($_POST['perpunctuality']))		
{
	$perpunctuality = $_POST['perpunctuality'];
}
if(isset($_POST['perdiscipline']))		
	{
	$perdiscipline = $_POST['perdiscipline'];
	}
if(isset($_POST['perattitude']))		
	{
	$perattitude = $_POST['perattitude'];
    }
if(isset($_POST['percommunication']))		
{
	$percommunication = $_POST['percommunication'];
}
if(isset($_POST['perclassparticipation']))		
	{
	$perclassparticipation = $_POST['perclassparticipation'];
    }
if(isset($_POST['percapability']))		
{
	$percapability = $_POST['percapability'];
}
if(isset($_POST['perskill']))		
	{
	$perskill = $_POST['perskill'];
	}

if(isset($_POST['test1name']))		
	{
	$test1name = $_POST['test1name'];
    }
if(isset($_POST['test1marks']))		
{
	$test1marks = $_POST['test1marks'];
}
if(isset($_POST['test2name']))		
	{
	$test2name = $_POST['test2name'];
    }
if(isset($_POST['test2marks']))		
{
	$test2marks = $_POST['test2marks'];
}

if(isset($_POST['test3name']))		
	{
	$test3name = $_POST['test3name'];
    }
if(isset($_POST['test3marks']))		
{
	$test3marks = $_POST['test3marks'];
}

if(isset($_POST['test4name']))		
	{
	$test4name = $_POST['test4name'];
    }
if(isset($_POST['test4marks']))		
{
	$test4marks = $_POST['test4marks'];
}

if(isset($_POST['reportcomments']))		
{
	$reportcomments = $_POST['reportcomments'];
}


if(isset($_POST['status']) &&  $_POST['status'] == 'Yes')		
{
$status    = 0;
}
else
{
$status    = 1;
}

	$qry = "INSERT INTO studentreport(
		studentname,rollnumber,standard,
		section,reportfrom,reportto,
		workingdays,absent,attendancepercent,
		perattendance,
		perpunctuality,perdiscipline, 
		perattitude, percommunication, 
		perclassparticipation, percapability,
		 perskill, test1name, test1marks, 
		 test2name, test2marks, test3name, 
		 test3marks, test4name, test4marks, 
		 reportcomments,status) 
	VALUES (
	'".strip_tags($studentname)."',
	'".strip_tags($rollnumber)."',
	'".strip_tags($standard)."',
	'".strip_tags($section)."',
	'".strip_tags($reportfrom)."',
	'".strip_tags($reportto)."',
	'".strip_tags($workingdays)."',
	'".strip_tags($absent)."',
	'".strip_tags($attendancepercent)."',
	'".strip_tags($perattendance)."',
	'".strip_tags($perpunctuality)."',
	'".strip_tags($perdiscipline)."',
	'".strip_tags($perattitude)."',
	'".strip_tags($percommunication)."',
	'".strip_tags($perclassparticipation)."',
	'".strip_tags($percapability)."',
	'".strip_tags($perskill)."',
	'".strip_tags($test1name)."',
	'".strip_tags($test1marks)."',
	'".strip_tags($test2name)."',
	'".strip_tags($test2marks)."',
	'".strip_tags($test3name)."',
	'".strip_tags($test3marks)."',
	'".strip_tags($test4name)."',
	'".strip_tags($test4marks)."',
	'".strip_tags($reportcomments)."',
	'".strip_tags($status)."');";		

$res =$mysqli->query($qry)or die("Error in Query".$mysqli->error);
$id = 0;
$id = $mysqli->insert_id;
return $id; 
}
/*End Add Student Report*/

/*Update Student Report*/
public function updatestudentreport($mysqli,$id) {	 
	$date  = date('Y-m-d');
        
	    if (isset($_POST['studentname'])) {
		$studentname = mysqli_real_escape_string($mysqli,$_POST['studentname']);		
		}	
	    if (isset($_POST['rollnumber'])) {
		$rollnumber = mysqli_real_escape_string($mysqli,$_POST['rollnumber']);		
		}	
        if (isset($_POST['standard'])) {
		$standard   = mysqli_real_escape_string($mysqli,$_POST['standard']);		
		}

	    if (isset($_POST['section'])) {
		$section = mysqli_real_escape_string($mysqli,$_POST['section']);		
		}	
	    if (isset($_POST['reportfrom'])) {
		$reportfrom = mysqli_real_escape_string($mysqli,$_POST['reportfrom']);		
		}	
        if (isset($_POST['reportto'])) {
		$reportto   = mysqli_real_escape_string($mysqli,$_POST['reportto']);		
		}

	    if (isset($_POST['workingdays'])) {
		$workingdays = mysqli_real_escape_string($mysqli,$_POST['workingdays']);		
		}	
	    if (isset($_POST['absent'])) {
		$absent = mysqli_real_escape_string($mysqli,$_POST['absent']);		
		}	
        if (isset($_POST['attendancepercent'])) {
		$attendancepercent   = mysqli_real_escape_string($mysqli,$_POST['attendancepercent']);		
		}

	    if (isset($_POST['perattendance'])) {
		$perattendance = mysqli_real_escape_string($mysqli,$_POST['perattendance']);		
		}	
	    if (isset($_POST['perpunctuality'])) {
		$perpunctuality = mysqli_real_escape_string($mysqli,$_POST['perpunctuality']);		
		}	
        if (isset($_POST['perdiscipline'])) {
		$perdiscipline   = mysqli_real_escape_string($mysqli,$_POST['perdiscipline']);		
		}

	    if (isset($_POST['perattitude'])) {
		$perattitude = mysqli_real_escape_string($mysqli,$_POST['perattitude']);		
		}	
	    if (isset($_POST['percommunication'])) {
		$percommunication = mysqli_real_escape_string($mysqli,$_POST['percommunication']);		
		}	
        if (isset($_POST['perclassparticipation'])) {
		$perclassparticipation   = mysqli_real_escape_string($mysqli,$_POST['perclassparticipation']);		
		}
		if (isset($_POST['percapability'])) {
		$percapability = mysqli_real_escape_string($mysqli,$_POST['percapability']);		
		}	
		if (isset($_POST['perskill'])) {
		$perskill   = mysqli_real_escape_string($mysqli,$_POST['perskill']);		
		}
	    if (isset($_POST['test1name'])) {
		$test1name = mysqli_real_escape_string($mysqli,$_POST['test1name']);		
		}	 
	    if (isset($_POST['test1marks'])) {
		$test1marks = mysqli_real_escape_string($mysqli,$_POST['test1marks']);		
		}	
        if (isset($_POST['test2name'])) {
		$test2name   = mysqli_real_escape_string($mysqli,$_POST['test2name']);		
		}

	    if (isset($_POST['test2marks'])) {
		$test2marks = mysqli_real_escape_string($mysqli,$_POST['test2marks']);		
		}	
	    if (isset($_POST['test3name'])) {
		$test3name = mysqli_real_escape_string($mysqli,$_POST['test3name']);		
		}	
        if (isset($_POST['test3marks'])) {
		$test3marks   = mysqli_real_escape_string($mysqli,$_POST['test3marks']);		
		}
	    if (isset($_POST['test4name'])) {
		$test4name = mysqli_real_escape_string($mysqli,$_POST['test4name']);		
		}	
	    if (isset($_POST['test4marks'])) {
		$test4marks = mysqli_real_escape_string($mysqli,$_POST['test4marks']);		
		}	
        if (isset($_POST['reportcomments'])) {
		$reportcomments   = mysqli_real_escape_string($mysqli,$_POST['reportcomments']);		
		}
      
		if(isset($_POST['status']) &&   $_POST['status'] == 'Yes')		
		{
			$status=0;
		}
		else
		{
			$status=1;
		}

		$updateQry = 'UPDATE  studentreport  SET 
studentname="'.strip_tags($studentname).'" ,rollnumber="'.strip_tags($rollnumber).'" ,
standard="'.strip_tags($standard).'" ,section="'.strip_tags($section).'",
reportfrom="'.$reportfrom.'",reportto="'.$reportto.'",
workingdays="'.$workingdays.'",absent="'.$absent.'",
attendancepercent="'.$attendancepercent.'",
perattendance="'.$perattendance.'",perpunctuality="'.$perpunctuality.'",
perdiscipline="'.$perdiscipline.'",perattitude="'.$perattitude.'",
percommunication="'.$percommunication.'",perclassparticipation="'.$perclassparticipation.'",
 percapability="'.$percapability.'",
perskill="'.$perskill.'",test1name="'.$test1name.'",
test1marks="'.$test1marks.'",test2name="'.$test2name.'",
test2marks="'.$test2marks.'",test3name="'.$test3name.'",
test3marks="'.$test3marks.'",test4name="'.$test4name.'",
test4marks="'.$test4marks.'",reportcomments="'.$reportcomments.'",
status="'.$status.'"
WHERE id ="'.mysqli_real_escape_string($mysqli,$id).'"   ';  


$res =$mysqli->query($updateQry)or die("Error in in update Query!.".$mysqli->error); 	

}	
/*End Update Student Report*/

/*Delete Student Report*/
public function deletestudentreport($mysqli,$del) 
{
	$date  = date('Y-m-d'); 
	$qry = 'UPDATE  studentreport  SET status="1"  WHERE id ="'.mysqli_real_escape_string($mysqli,$del).'"'; 
	$res =$mysqli->query($qry)or die("Error in delete query".$mysqli->error);	
} 
/*Get Student Report*/
public function getstudentreport($mysqli,$idupd) 
		{
			$qry = "SELECT * FROM studentreport WHERE id='".mysqli_real_escape_string($mysqli,$idupd)."'"; 
			$res =$mysqli->query($qry)or die("Error in Get All Records".$mysqli->error);
			$detailrecords = array();
			if ($mysqli->affected_rows>0)
			{
				$row = $res->fetch_object();	
			    $detailrecords['id']                		 = $row->id; 
				$detailrecords['studentname']       		 = strip_tags($row->studentname);
				$detailrecords['rollnumber']                 = strip_tags($row->rollnumber);
				$detailrecords['standard']       	         = strip_tags($row->standard);
				$detailrecords['section']       	         = strip_tags($row->section);

		    	$detailrecords['reportfrom']                 = strip_tags($row->reportfrom);
				$detailrecords['reportto']       	         = strip_tags($row->reportto);

				$detailrecords['workingdays']          	     = strip_tags($row->workingdays);
				$detailrecords['absent']         	         = strip_tags($row->absent);
				$detailrecords['attendancepercent']        	 = strip_tags($row->attendancepercent);

				$detailrecords['perattendance']              = strip_tags($row->perattendance);
				$detailrecords['perpunctuality']     	     = strip_tags($row->perpunctuality);
				$detailrecords['perdiscipline']              = strip_tags($row->perdiscipline);
				$detailrecords['perattitude']                = strip_tags($row->perattitude);
				$detailrecords['percommunication']           = strip_tags($row->percommunication);
				$detailrecords['perclassparticipation']      = strip_tags($row->perclassparticipation);
				$detailrecords['percapability']              = strip_tags($row->percapability);
				$detailrecords['perskill']                   = strip_tags($row->perskill);

				$detailrecords['test1name']                  = strip_tags($row->test1name);
				$detailrecords['test1marks']                 = strip_tags($row->test1marks);
				$detailrecords['test2name']                  = strip_tags($row->test2name);
				$detailrecords['test2marks']                 = strip_tags($row->test2marks);
				$detailrecords['test3name']                  = strip_tags($row->test3name);
				$detailrecords['test3marks']                 = strip_tags($row->test3marks);
				$detailrecords['test4name']                  = strip_tags($row->test4name);
				$detailrecords['test4marks']                 = strip_tags($row->test4marks);
				
				$detailrecords['reportcomments']             = strip_tags($row->reportcomments);
				$detailrecords['status']                     = strip_tags($row->status);		
				
			}
			return $detailrecords;
		}

/*End Student Report*/


/* Add Pending Fee */
public function addpendingfee($mysqli) 
{
if(isset($_POST['studentname']))		
	{
	$studentname = $_POST['studentname'];
	}
if(isset($_POST['rollnumber']))		
	{
	$rollnumber = $_POST['rollnumber'];
    }
if(isset($_POST['medium']))		
{
	$medium = $_POST['medium'];
}
if(isset($_POST['standard']))		
	{
	$standard = $_POST['standard'];
	}
	if(isset($_POST['section']))		
	{
	$section = $_POST['section'];
	}
	if(isset($_POST['academicyear']))		
	{
	$academicyear = $_POST['academicyear'];
	}
	if(isset($_POST['totalfee']))		
	{
	$totalfee = $_POST['totalfee'];
	}
	if(isset($_POST['pendingfee']))		
	{
	$pendingfee = $_POST['pendingfee'];
	}
	
	if(isset($_POST['status']) &&  $_POST['status'] == 'Yes')		
	{
	$status    = 0;
	}
	else
	{
	$status    = 1;
	}

	$qry = "INSERT INTO pendingfee(
		studentname,
		rollnumber,
		medium,
		standard,
		section,
		academicyear,
		pendingfee,
		totalfee,
		status) VALUES (
	'".strip_tags($studentname)."',
	'".strip_tags($rollnumber)."',
	'".strip_tags($medium)."',
	'".strip_tags($standard)."',
	'".strip_tags($section)."',
	'".strip_tags($academicyear)."',
	'".strip_tags($pendingfee)."',
	'".strip_tags($totalfee)."',
	'".strip_tags($status)."');";
	$res =$mysqli->query($qry)or die("Error in Query".$mysqli->error);
	$id = 0;
	$id = $mysqli->insert_id;
	return $id; 
	}

	/*Update pending Fee*/
	public function updatependingfee($mysqli,$id) {	 
		$date  = date('Y-m-d');
			
			if (isset($_POST['studentname'])) {
			$studentname = mysqli_real_escape_string($mysqli,$_POST['studentname']);		
			}	
			if (isset($_POST['rollnumber'])) {
			$rollnumber = mysqli_real_escape_string($mysqli,$_POST['rollnumber']);		
			}	
			if (isset($_POST['medium'])) {
			$medium   = mysqli_real_escape_string($mysqli,$_POST['medium']);		
			}
	
			if (isset($_POST['standard'])) {
			$standard = mysqli_real_escape_string($mysqli,$_POST['standard']);		
			}	
			if (isset($_POST['section'])) {
				$section = mysqli_real_escape_string($mysqli,$_POST['section']);		
				}	
				if (isset($_POST['academicyear'])) {
				$academicyear = mysqli_real_escape_string($mysqli,$_POST['academicyear']);		
				}	
				if (isset($_POST['totalfee'])) {
				$totalfee   = mysqli_real_escape_string($mysqli,$_POST['totalfee']);		
				}
		
				if (isset($_POST['pendingfee'])) {
				$pendingfee = mysqli_real_escape_string($mysqli,$_POST['pendingfee']);		
				}	
					if(isset($_POST['status']) &&  $_POST['status'] == 'Yes')		
					{
					$status    = 0;
					}
					else
					{
					$status    = 1;
					}
			$updateQry = 'UPDATE  pendingfee  SET 
			studentname="'.strip_tags($studentname).'" ,rollnumber="'.strip_tags($rollnumber).'" ,
			medium="'.strip_tags($medium).'" ,standard="'.strip_tags($standard).'",
			section="'.strip_tags($section).'" ,academicyear="'.strip_tags($academicyear).'" ,
			totalfee="'.strip_tags($totalfee).'" ,pendingfee="'.strip_tags($pendingfee).'",
			status="'.$status.'"
          WHERE pendingfeeid ="'.mysqli_real_escape_string($mysqli,$id).'"   ';  
		  $res =$mysqli->query($updateQry)or die("Error in in update Query!.".$mysqli->error); 	

}	

/*Delete Pending Fee*/

public function deletependingfee($mysqli,$del) 
{
	$date  = date('Y-m-d'); 
	$qry = 'UPDATE  pendingfee  SET status="1"  WHERE pendingfeeid ="'.mysqli_real_escape_string($mysqli,$del).'"'; 
	$res =$mysqli->query($qry)or die("Error in delete query".$mysqli->error);	
} 
/*get Pending Fee*/
public function getpendingfee($mysqli,$idupd) 
		{
			$qry = "SELECT * FROM pendingfee WHERE pendingfeeid='".mysqli_real_escape_string($mysqli,$idupd)."'"; 
			$res =$mysqli->query($qry)or die("Error in Get All Records".$mysqli->error);
			$detailrecords = array();
			if ($mysqli->affected_rows>0)
			{
				$row = $res->fetch_object();	
			    $detailrecords['id']                		 = $row->pendingfeeid; 
				$detailrecords['studentname']       		 = strip_tags($row->studentname);
				$detailrecords['rollnumber']                 = strip_tags($row->rollnumber);
				$detailrecords['medium']       	             = strip_tags($row->medium);
				$detailrecords['standard']       	         = strip_tags($row->standard);
				$detailrecords['section']       		     = strip_tags($row->section);
				$detailrecords['academicyear']               = strip_tags($row->academicyear);
				$detailrecords['totalfee']       	         = strip_tags($row->totalfee);
				$detailrecords['pendingfee']       	         = strip_tags($row->pendingfee);
				$detailrecords['status']                     = strip_tags($row->status);
				
		
			}
			return $detailrecords;
		}

		/*Add Student RollBack*/
		public function addstudentrollback($mysqli) {
			
			if(isset($_POST['standard']))		
				{
				$standard = $_POST['standard'];
				}
				if(isset($_POST['section']))		
				{
				$section = $_POST['section'];
				}
				if(isset($_POST['studentname']))		
				{
				$studentname = $_POST['studentname'];
				}
				if(isset($_POST['rollnumber']))		
				{
				$rollnumber = $_POST['rollnumber'];
				}
    if(isset($_POST['checks']) && $_POST['checks'] == 'Yes')		
    {
    $checks    = 0;
    }
    else
    {
    $checks    = 1;
    }
	if(isset($_POST['result']))		
	{
	$result = $_POST['result'];
	}
    if(isset($_POST['status']) && $_POST['status'] == 'Yes')		
    {
    $status    = 0;
    }
    else
    {
    $status    = 1;
    }	

                $qry = "INSERT INTO studentrollback(standard, section, status) 
                VALUES ('".strip_tags($standard)."','".strip_tags($section)."','".strip_tags($status)."')";
				$res =$mysqli->query($qry) or die("Error in Query".$mysqli->error);

		        $studentrollbackid = $mysqli->insert_id;
				
				$qry1 = "INSERT INTO studentrollbackreference(studentname, rollnumber, result, checks, status, studentrollbackid) VALUES('".strip_tags($studentname)."','".strip_tags($rollnumber)."', '".strip_tags($result)."', '".strip_tags($checks)."', '".strip_tags($status)."',
				'".strip_tags($studentrollbackid)."')";

					$res1 =$mysqli->query($qry1) or die("Error in Query".$mysqli->error);
					$id = 0;
					$id = $mysqli->insert_id;
					return $id;  
				
		}
		
		/*Get Student Rollback*/
		public function getstudentrollback($mysqli,$idupd){
			$qry = "SELECT * FROM studentrollback WHERE studentrollbackid='".mysqli_real_escape_string($mysqli,$idupd)."'"; 
			$res =$mysqli->query($qry)or die("Error in Get All Records".$mysqli->error);
            $detailrecords = array();
			if ($mysqli->affected_rows>0)
			{
				$row = $res->fetch_object();	
			    $detailrecords['studentrollbackid']  = $row->studentrollbackid; 
				$detailrecords['standard']           = strip_tags($row->standard);
				$detailrecords['section']            = strip_tags($row->section);
				$detailrecords['status']            = strip_tags($row->status);
            }
            return $detailrecords;
        }
        
        public function studentrollbackreferencedetails($mysqli,$idupd){
        	$qry = "SELECT * FROM studentrollbackreference WHERE studentrollbackid='".mysqli_real_escape_string($mysqli,$idupd)."'";
			$res =$mysqli->query($qry)or die("Error in Get All Records".$mysqli->error);
			$detailrecords = array();
			$i = 0;
			if ($mysqli->affected_rows>0)
			{
				$row = $res->fetch_object();	
			    $detailrecords['referenceid']                = $row->referenceid; 
				$detailrecords['studentname']       		 = strip_tags($row->studentname);
				$detailrecords['rollnumber']                 = strip_tags($row->rollnumber);
				$detailrecords['result']       	             = strip_tags($row->result);
				$detailrecords['studentrollbackid']       	 = strip_tags($row->studentrollbackid);
				$detailrecords['checks']                     = strip_tags($row->checks);
				//$detailrecords['status']                     = strip_tags($row->status);
			}
			return $detailrecords;
		}

/*Update Fee History*/
public function updatestudentrollback($mysqli ,$id) {
	$date  = date('Y-m-d');
	
	if(isset($_POST['studentname']))		
	{
	$studentname = $_POST['studentname'];
	}
	if(isset($_POST['rollnumber']))		
	{
	$rollnumber = $_POST['rollnumber'];
	}
	if(isset($_POST['standard']))		
	{
	$standard = $_POST['standard'];
	}
	if(isset($_POST['section']))		
	{
	$section = $_POST['section'];
	}
    if(isset($_POST['checks']) && $_POST['checks'] == 'Yes')		
    {
    $checks    = 0;
    }
    else
    {
    $checks    = 1;
    }
	if(isset($_POST['result']))		
	{
	$result = $_POST['result'];
	}
    if(isset($_POST['status']) && $_POST['status'] == 'Yes')		
    {
    $status    = 0;
    }
    else
    {
    $status    = 1;
    }	
			$updateQry = 'UPDATE  studentrollback  SET 
			standard="'.strip_tags($standard).'",
			section="'.strip_tags($section).'",
			status="'.strip_tags($status).'"
            WHERE studentrollbackid ="'.mysqli_real_escape_string($mysqli, $id).'"   ';  
		    $res =$mysqli->query($updateQry)or die("Error in in update Query!.".$mysqli->error); 
		  
		  
			$updateQry = 'UPDATE  studentrollbackreference  SET 
			studentname="'.strip_tags($studentname).'" ,rollnumber="'.strip_tags($rollnumber).'" ,
			checks="'.strip_tags($checks).'" ,result="'.strip_tags($result).'" ,
			status="'.$status.'"
            WHERE studentrollbackid ="'.mysqli_real_escape_string($mysqli, $id).'"   ';  
		    $res =$mysqli->query($updateQry)or die("Error in in update Query!.".$mysqli->error); 	

}
/*Delete Student ROllback*/
public function deletestudentrollback($mysqli,$del) {
			$date  = date('Y-m-d'); 
	          $qry = 'UPDATE  studentrollback  SET status="1"  WHERE studentrollbackid ="'.mysqli_real_escape_string($mysqli,$del).'"'; 
	        $res =$mysqli->query($qry)or die("Error in delete query".$mysqli->error);	
		}

/*view fee history*/
public function viewfeehistory($mysqli,$idupd) 
{
	$date  = date('Y-m-d');
			
	if (isset($_POST['studentname'])) {
	$studentname = mysqli_real_escape_string($mysqli,$_POST['studentname']);		
	}	
	$qry = "SELECT * FROM studentname WHERE feecollectid='".mysqli_real_escape_string($mysqli,$idupd)."'"; 
			$res =$mysqli->query($qry)or die("Error in Get studentname Records".$mysqli->error);
			$detailrecords = array();
			if ($mysqli->affected_rows>0)
			{
				$detailrecords['studentname']     = strip_tags($row->studentname);
	
			}
			return $detailrecords;

}


/*Add Fee Collection*/
public function addfeecollection($mysqli) {

		if(isset($_POST['receiptnumber']))		
		{	
		$receiptnumber = $_POST['receiptnumber'];
		}
		if(isset($_POST['registernumber']))		
		{
		$registernumber = $_POST['registernumber'];
		}
		if(isset($_POST['studentid']))		
		{
		$studentid = $_POST['studentid'];
		}
		if(isset($_POST['receiptdate']))		
		{
		$receiptdate = $_POST['receiptdate'];
		}
		if(isset($_POST['academicyear']))		
		{
		$academicyear = $_POST['academicyear'];
		}	
		if(isset($_POST['standard']))		
		{	
		$standard = $_POST['standard'];
		}
		if(isset($_POST['otherchanges']))		
		{
		$otherchanges = $_POST['otherchanges'];
		}
		if(isset($_POST['otherfeesreceived']))		
		{
		$otherfeesreceived = $_POST['otherfeesreceived'];
		}
		if(isset($_POST['totalfeecollected']))		
		{	
		$totalfeecollected = $_POST['totalfeecollected'];
		}
		if(isset($_POST['finalfeecollected']))		
		{
		$finalfeecollected = $_POST['finalfeecollected'];
		}
		if(isset($_POST['feecollected']))		
		{
		$feecollected = $_POST['feecollected'];
		}
		if(isset($_POST['balancefeecollect']))		
		{
		$balancefeecollect = $_POST['balancefeecollect'];
		}	
		if(isset($_POST['status']) && $_POST['status'] == 'Yes')		
		{
		$status    = 0;
		}
		else
		{
		$status    = 1;
		}

		$qry="INSERT INTO feescollection(receiptnumber, registernumber, studentid, receiptdate, academicyear, standard, otherchanges, otherfeesreceived, totalfeecollected, finalfeecollected, feecollected, balancefeecollect, status) VALUES (
		'".strip_tags($receiptnumber)."',
		'".strip_tags($registernumber)."',
		'".strip_tags($studentid)."',
		'".strip_tags($receiptdate)."',
		'".strip_tags($academicyear)."',
		'".strip_tags($standard)."',
		'".strip_tags($otherchanges)."',
		'".strip_tags($otherfeesreceived)."',
		'".strip_tags($totalfeecollected)."',
		'".strip_tags($finalfeecollected)."',
		'".strip_tags($feecollected)."',
		'".strip_tags($balancefeecollect)."',
		'".strip_tags($status)."');";

	
		$res =$mysqli->query($qry)or die("Error in Query".$mysqli->error);

		$feecollectid = 0;
		$feecollectid = $mysqli->insert_id;

		$groupfees       = $_POST['groupfees'];
		$groupfeesamount = $_POST['groupfeesamount'];
		$feesrecieved    = $_POST['feesrecieved'];
		$scholarship     = $_POST['scholarship'];
		$balance         = $_POST['balance'];
	    $groupfeeslength = sizeof($groupfees);
				
		$i=0 ;
		for( $i=0 ;$i<$groupfeeslength;$i++){
		$qry1 = "INSERT INTO groupfees (groupfees, groupfeesamount, feesreceived, scholarship, balance, feecollectid) 
		VALUES (
		'".strip_tags($groupfees[$i])."',
		'".strip_tags($groupfeesamount[$i])."',
		'".strip_tags($feesrecieved[$i])."',
		'".strip_tags($scholarship[$i])."',
		'".strip_tags($balance[$i])."',
	    '".strip_tags($feecollectid)."');";

		$res1 =$mysqli->query($qry1)or die("Error in Query".$mysqli->error);

		$groupfeeid = 0;
		$groupfeeid = $mysqli->insert_id;
		}

		$payrupees            = $_POST['payrupees'];
		$paynumberofrupees    = $_POST['paynumberofrupees'];
		$payamount            = $_POST['payamount'];
	    $payfeelength         = sizeof($payrupees);
	
		
		$j=0 ;
		for( $j=0 ;$j<$payfeelength;$j++){
		$qry2 = "INSERT INTO payfees(payrupees, paynumberofrupees, payamount, feecollectid) VALUES 
		 ('".strip_tags($payrupees[$j])."','".strip_tags($paynumberofrupees[$j])."','".strip_tags($payamount[$j])."','".strip_tags($feecollectid)."');";

		$res2 =$mysqli->query($qry2)or die("Error in Query".$mysqli->error);
		$payfeeid = 0;
		$payfeeid = $mysqli->insert_id;
		}
		
		return $feecollectid;
		}


	public function updatefeecollection($mysqli,$id) { 		

		$date  = date('Y-m-d');

		if(isset($_POST['receiptnumber']))		
		{	
		$receiptnumber = $_POST['receiptnumber'];
		}
		if(isset($_POST['registernumber']))		
		{
		$registernumber = $_POST['registernumber'];
		}
		if(isset($_POST['studentid']))		
		{
		$studentid = $_POST['studentid'];
		}
		if(isset($_POST['receiptdate']))		
		{
		$receiptdate = $_POST['receiptdate'];
		}
		if(isset($_POST['academicyear']))		
		{
		$academicyear = $_POST['academicyear'];
		}	
		if(isset($_POST['standard']))		
		{	
		$standard = $_POST['standard'];
		}
		if(isset($_POST['otherchanges']))		
		{
		$otherchanges = $_POST['otherchanges'];
		}
		if(isset($_POST['otherfeesreceived']))		
		{
		$otherfeesreceived = $_POST['otherfeesreceived'];
		}
		if(isset($_POST['totalfeecollected']))		
		{	
		$totalfeecollected = $_POST['totalfeecollected'];
		}
		if(isset($_POST['finalfeecollected']))		
		{
		$finalfeecollected = $_POST['finalfeecollected'];
		}
		if(isset($_POST['feecollected']))		
		{
		$feecollected = $_POST['feecollected'];
		}
		if(isset($_POST['balancefeecollect']))		
		{
		$balancefeecollect = $_POST['balancefeecollect'];
		}	
		if(isset($_POST['status']) && $_POST['status'] == 'Yes')		
		{
		$status    = 0;
		}
		else
		{
		$status    = 1;
		}		
			
		$updateQry = 'UPDATE  feescollection  SET 
		receiptnumber = "'.strip_tags($receiptnumber).'",
        registernumber = "'.strip_tags($registernumber).'",
		studentid = "'.strip_tags($studentid).'",
		receiptdate = "'.strip_tags($receiptdate).'",
		academicyear = "'.strip_tags($academicyear).'",
		standard = "'.strip_tags($standard).'",
		otherchanges = "'.strip_tags($otherchanges).'",
		otherfeesreceived = "'.strip_tags($otherfeesreceived).'",
		totalfeecollected =  "'.strip_tags($totalfeecollected).'",
		finalfeecollected ="'.strip_tags($finalfeecollected).'",
		feecollected = "'.strip_tags($feecollected).'",
		balancefeecollect = "'.strip_tags($balancefeecollect).'",
		status = "'.strip_tags($status).'" WHERE feecollectid="'.mysqli_real_escape_string($mysqli,$id).'" ';  
				
		$res =$mysqli->query($updateQry)or die("Error in in update Query!.".$mysqli->error); 
			
			
	    $groupfees       = $_POST['groupfees'];
		$groupfeesamount = $_POST['groupfeesamount'];
		$feesreceived    = $_POST['feesreceived'];
		$scholarship     = $_POST['scholarship'];
		$balance         = $_POST['balance'];
		$groupfeeid      = $_POST['groupfeeid'];
		
	    $groupfeeslength= sizeof($groupfees);
				
		$i=0 ;
		for( $i=0 ;$i<$groupfeeslength;$i++){
	$updateQrygf = 'UPDATE  groupfees  SET groupfees="'.strip_tags($groupfees[$i]).'" ,
groupfeesamount="'.strip_tags($groupfeesamount[$i]).'" ,		 
feesreceived="'.strip_tags($feesreceived[$i]).'",
scholarship="'.strip_tags($scholarship[$i]).'",
balance="'.strip_tags($balance[$i]).'"		
WHERE groupfeeid="'.mysqli_real_escape_string($mysqli,$groupfeeid[$i]).'" ';  		
$res =$mysqli->query($updateQrygf)or die("Error in in update Query!.".$mysqli->error); 
		}
		
		$payrupees            = $_POST['payrupees'];
		$paynumberofrupees    = $_POST['paynumberofrupees'];
		$payamount            = $_POST['payamount'];
		$payfeeid             = $_POST['payfeeid'];

	    $payrupeeslength = sizeof($payrupees);
	
	
		$j=0 ;
		for( $j=0 ;$j<$payrupeeslength;$j++){

$updateQrypf = 'UPDATE  payfees  SET payrupees="'.strip_tags($payrupees[$j]).'", paynumberofrupees="'.strip_tags($paynumberofrupees[$j]).'",payamount="'.strip_tags($payamount[$j]).'" WHERE payfeeid="'.mysqli_real_escape_string($mysqli,$payfeeid[$j]).'" '; 

	$res =$mysqli->query($updateQrypf)or die("Error in in update Query!.".$mysqli->error); 
	}
}	

public function getfeecollectiondetails($mysqli,$idupd) 
		{
			$qry = "SELECT * FROM feescollection WHERE feecollectid='".mysqli_real_escape_string($mysqli,$idupd)."'"; 
			$res =$mysqli->query($qry)or die("Error in Get All Records".$mysqli->error);
			$detailrecords = array();
			if ($mysqli->affected_rows>0)
			{
				$row = $res->fetch_object();	
			    $detailrecords['feecollectid']       = $row->feecollectid; 
				$detailrecords['receiptnumber']      = strip_tags($row->receiptnumber);
				$detailrecords['registernumber']     = strip_tags($row->registernumber);
				$detailrecords['studentid']        = strip_tags($row->studentid);
				$detailrecords['receiptdate']        = strip_tags($row->receiptdate);	
				$detailrecords['academicyear']       = strip_tags($row->academicyear);
				$detailrecords['standard']           = strip_tags($row->standard);
				$detailrecords['otherchanges']       = strip_tags($row->otherchanges);
				$detailrecords['otherfeesreceived']  = strip_tags($row->otherfeesreceived);	
				$detailrecords['totalfeecollected']  = strip_tags($row->totalfeecollected);
				$detailrecords['finalfeecollected']  = strip_tags($row->finalfeecollected);
				$detailrecords['feecollected']       = strip_tags($row->feecollected);
				$detailrecords['balancefeecollect']  = strip_tags($row->balancefeecollect);		
				$detailrecords['status']             = strip_tags($row->status);		
			}
			return $detailrecords;
		}

		public function getgroupfeedetails($mysqli,$idfeescol) 
		{
			$qry = "SELECT * FROM groupfees WHERE feecollectid='".mysqli_real_escape_string($mysqli,$idfeescol)."'"; 
			$res =$mysqli->query($qry)or die("Error in Get All Records".$mysqli->error);
			$detailrecords = array();
			$i = 0;
			if ($mysqli->affected_rows>0)
			{
				while($row = $res->fetch_object()) 	
				{					
			    $detailrecords[$i]['groupfeeid']           = $row->groupfeeid; 
				$detailrecords[$i]['groupfees']       	   = strip_tags($row->groupfees);
				$detailrecords[$i]['groupfeesamount']      = strip_tags($row->groupfeesamount);
				$detailrecords[$i]['feesreceived']         = strip_tags($row->feesreceived);
				$detailrecords[$i]['scholarship']          = strip_tags($row->scholarship);
				$detailrecords[$i]['balance']              = strip_tags($row->balance);					
				$i++;
				}			
			}
			return $detailrecords;
		}
		
		public function getpayfeedetails($mysqli,$idfeescol) 
		{
			$qry = "SELECT * FROM payfees WHERE feecollectid ='".mysqli_real_escape_string($mysqli,$idfeescol)."'";
			$res =$mysqli->query($qry)or die("Error in Get All Records".$mysqli->error);
			$detailrecords = array();
			$i = 0;
			if ($mysqli->affected_rows>0)
			{
				while($row = $res->fetch_object()) 	
				{					
			    $detailrecords[$i]['payfeeid']               = $row->payfeeid; 
				$detailrecords[$i]['payrupees']       	     = strip_tags($row->payrupees);
				$detailrecords[$i]['paynumberofrupees']      = strip_tags($row->paynumberofrupees);
				$detailrecords[$i]['payamount']              = strip_tags($row->payamount);
				$i++;
				}			
			}
			return $detailrecords;
		}

public function deletefeecollection($mysqli, $id) 
		{
			$date  = date('Y-m-d'); 
	    	$qry = 'UPDATE  feescollection  SET status="1" 
	    	 WHERE feecollectid="'.mysqli_real_escape_string($mysqli,$id).'"'; 	    
    		$res =$mysqli->query($qry)or die("Error in delete query".$mysqli->error);	
		}

}
?>