<?php

class BookingModel
{
  public function requestSaveDate($date, $time, $seat, $userId)
  {
    $database = new Database();
    $sql = 'INSERT INTO booking (BookingDate, BookingTime, NumberOfSeats, User_Id) VALUES (?, ?, ?, ?)';
    return $database->executeSql($sql, [$date, $time, $seat, $userId]);
  }
}
