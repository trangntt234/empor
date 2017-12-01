<?php
require_once 'models/BaseModel.php';
/**
* 
*/
class Order extends BaseModel
{
	public $tableName = 'orders';
	public $columns = ['UserID','OrderDate','ShippedDate','OrdererEmail','ReceiverName','ReceiverSurname','OrdererPhone','ReceiverAddress','Ghichu','TotalPrice','TinhTrang'];
}
?>