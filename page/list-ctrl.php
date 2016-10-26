<?php 
$headTemplate = new HeadTemplate('Booking List | Fly to the Limit' | 'List of Bookings');

//$status = Utils::getUrlParam('status');
//TodoValidator::validateStatus($status);

$dao = new BookingDao();
//$search = new TodoSearchCriteria();
//$search->setStatus($status);

// data for template
//$title = Utils::capitalize($status) . ' TODOs';
//$todos = $dao->find($search);
$sql = 'SELECT * FROM bookings';
$bookings = $dao->find($sql);
?>