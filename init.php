<?php
/*
 *
 * Kohana_Response -> send_file ::EVENT_SEND_FILE_ERROR
if (is_object(Kohana::$log))
{
  // Add this exception to the log
  Kohana::$log->add(Log::ERROR, $error);

  // Make sure the logs are written
  Kohana::$log->write();
}*/

/*kohana exception*/
/**
 * Logs an exception.
 *
 * @uses    Kohana_Exception::text
 * @param   Exception  $e
 * @param   int        $level
 * @return  void
 */
/*  public static function log(Exception $e, $level = Log::EMERGENCY)
  {
    if (is_object(Kohana::$log))
    {
      // Create a text version of the exception
      $error = Kohana_Exception::text($e);

      // Add this exception to the log
      Kohana::$log->add($level, $error, NULL, array('exception' => $e));

      // Make sure the logs are written
      Kohana::$log->write();
    }
  }*/
/*
Kohana_Session -> write()
    Kohana::$log->add(Log::ERROR, Kohana_Exception::text($e))->write();
*/