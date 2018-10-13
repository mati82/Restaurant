<?php

class BookingModel
{
  public function requestSaveDate($saveDate)
  {
    $database = new Database();
    $sql = 'INSERT INTO booking (BookingDate, BookingTime, NumberOfSeats, User_Id, CreationTimestamp)
    VALUES (?, ?, ?, ?, NOW())';
    return $database->executeSql($sql, $saveDate);
  }
}
