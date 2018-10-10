<?php

class BookingModel
{
  public function requestSaveDate($dateToSave)
  {
    $database = new Database();
    $sql = 'INSERT INTO booking (BookingDate, BookingTime, NumberOfSeats, User_Id) VALUES (?, ?, ?, ?)';
    $database->executeSql($sql, $dateToSave);
  }
}
