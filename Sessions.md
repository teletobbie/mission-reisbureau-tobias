	//Customer info
	$customer_id = "";
	$customer_first_name = $_SESSION['customer_first_name'];
	$customer_last_name = $_SESSION['customer_last_name'];
	$customer_adress = $_SESSION['customer_adress'];
	$customer_zipcode = $_SESSION['customer_zipcode'];
	$customer_city = $_SESSION['customer_city'];
	$customer_country = $_SESSION['customer_country'];
	$customer_phonenumer = $_SESSION['customer_phonenumber'];
	
	//booking data
	$booking_id = "";
	$booking_city = $_SESSION['booking_city'];
	$booking_arrivalDate = $_SESSION['booking_date_of_arrival'];
	$booking_departureDate = $_SESSION['booking_date_of_departure'];
	$roomID = $_SESSION['room_id'];
	$customer_id;
	
	
	//bus data
	$bus_resevation_id = "";
	$bus_boarding_point = $_SESSION['bus_boarding_point'];
	$bus_price = $_SESSION['bus_price'];
	$bus_boarding_point_return = $_SESSION['$bus_boarding_point_return'];
	$booking_id;
	
	// fligth data
	$fligth_id = "";
	$flight_price = $_SESSION['flight_Price'];
	$flight_departure_time = $_SESSION['flight_departure_time'];
	$flight_arrival_time = $_SESSION['flight_arrival_time'];
	$booking_id;