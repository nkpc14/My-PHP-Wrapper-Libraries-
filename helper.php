<?php
/**
 * Created by PhpStorm.
 * User: Nitish Kumar
 * Date: 8/5/2018
 * Time: 12:31 AM
 */
//
//            mysqli {
//                /* Properties */
//                int $affected_rows;
//            int $connect_errno;
//            string $connect_error;
//            int $errno;
//            array $error_list;
//            string $error;
//            int $field_count;
//            string $client_info;
//            int $client_version;
//            string $host_info;
//            string $protocol_version;
//            string $server_info;
//            int $server_version;
//            string $info;
//            mixed $insert_id;
//            string $sqlstate;
//            int $thread_id;
//            int $warning_count;
//            /* Methods */
//            __construct ([ string $host = ini_get("mysqli.default_host") [, string $username = ini_get("mysqli.default_user") [, string $passwd = ini_get("mysqli.default_pw") [, string $dbname = "" [, int $port = ini_get("mysqli.default_port") [, string $socket = ini_get("mysqli.default_socket") ]]]]]] )
//            bool autocommit ( bool $mode )
//            bool change_user ( string $user , string $password , string $database )
//            string character_set_name ( void )
//            bool close ( void )
//            bool commit ([ int $flags [, string $name ]] )
//            void connect ([ string $host = ini_get("mysqli.default_host") [, string $username = ini_get("mysqli.default_user") [, string $passwd = ini_get("mysqli.default_pw") [, string $dbname = "" [, int $port = ini_get("mysqli.default_port") [, string $socket = ini_get("mysqli.default_socket") ]]]]]] )
//            bool debug ( string $message )
//            bool dump_debug_info ( void )
//            object get_charset ( void )
//            string get_client_info ( void )
//            bool get_connection_stats ( void )
//            string mysqli_stmt::get_server_info ( void )
//            mysqli_warning get_warnings ( void )
//            mysqli init ( void )
//            bool kill ( int $processid )
//            bool more_results ( void )
//            bool multi_query ( string $query )
//            bool next_result ( void )
//            bool options ( int $option , mixed $value )
//            bool ping ( void )
//            public static int poll ( array &$read , array &$error , array &$reject , int $sec [, int $usec ] )
//            mysqli_stmt prepare ( string $query )
//            mixed query ( string $query [, int $resultmode = MYSQLI_STORE_RESULT ] )
//            bool real_connect ([ string $host [, string $username [, string $passwd [, string $dbname [, int $port [, string $socket [, int $flags ]]]]]]] )
//            string escape_string ( string $escapestr )
//            string real_escape_string ( string $escapestr )
//            bool real_query ( string $query )
//            public mysqli_result reap_async_query ( void )
//            public bool refresh ( int $options )
//            bool rollback ([ int $flags [, string $name ]] )
//            int rpl_query_type ( string $query )
//            bool select_db ( string $dbname )
//            bool send_query ( string $query )
//            bool set_charset ( string $charset )
//            bool set_local_infile_handler ( mysqli $link , callable $read_func )
//            bool ssl_set ( string $key , string $cert , string $ca , string $capath , string $cipher )
//            string stat ( void )
//            mysqli_stmt stmt_init ( void )
//            mysqli_result store_result ([ int $option ] )
//            mysqli_result use_result ( void )
//            }





//
//            mysqli::$affected_rows — Gets the number of affected rows in a previous MySQL operation
//            mysqli::autocommit — Turns on or off auto-committing database modifications
//            mysqli::begin_transaction — Starts a transaction
//            mysqli::change_user — Changes the user of the specified database connection
//            mysqli::character_set_name — Returns the default character set for the database connection
//            mysqli::close — Closes a previously opened database connection
//            mysqli::commit — Commits the current transaction
//            mysqli::$connect_errno — Returns the error code from last connect call
//            mysqli::$connect_error — Returns a string description of the last connect error
//            mysqli::__construct — Open a new connection to the MySQL server
//            mysqli::debug — Performs debugging operations
//            mysqli::dump_debug_info — Dump debugging information into the log
//            mysqli::$errno — Returns the error code for the most recent function call
//            mysqli::$error_list — Returns a list of errors from the last command executed
//            mysqli::$error — Returns a string description of the last error
//            mysqli::$field_count — Returns the number of columns for the most recent query
//            mysqli::get_charset — Returns a character set object
//            mysqli::$client_info — Get MySQL client info
//            mysqli::$client_version — Returns the MySQL client version as an integer
//            mysqli::get_connection_stats — Returns statistics about the client connection
//            mysqli::$host_info — Returns a string representing the type of connection used
//            mysqli::$protocol_version — Returns the version of the MySQL protocol used
//            mysqli::$server_info — Returns the version of the MySQL server
//            mysqli::$server_version — Returns the version of the MySQL server as an integer
//            mysqli::get_warnings — Get result of SHOW WARNINGS
//            mysqli::$info — Retrieves information about the most recently executed query
//            mysqli::init — Initializes MySQLi and returns a resource for use with mysqli_real_connect()
//            mysqli::$insert_id — Returns the auto generated id used in the latest query
//            mysqli::kill — Asks the server to kill a MySQL thread
//            mysqli::more_results — Check if there are any more query results from a multi query
//            mysqli::multi_query — Performs a query on the database
//            mysqli::next_result — Prepare next result from multi_query
//            mysqli::options — Set options
//            mysqli::ping — Pings a server connection, or tries to reconnect if the connection has gone down
//            mysqli::poll — Poll connections
//            mysqli::prepare — Prepare an SQL statement for execution
//                                                           mysqli::query — Performs a query on the database
//            mysqli::real_connect — Opens a connection to a mysql server
//            mysqli::real_escape_string — Escapes special characters in a string for use in an SQL statement, taking into account the current charset of the connection
//            mysqli::real_query — Execute an SQL query
//            mysqli::reap_async_query — Get result from async query
//            mysqli::refresh — Refreshes
//            mysqli::release_savepoint — Removes the named savepoint from the set of savepoints of the current transaction
//            mysqli::rollback — Rolls back current transaction
//            mysqli::rpl_query_type — Returns RPL query type
//            mysqli::savepoint — Set a named transaction savepoint
//            mysqli::select_db — Selects the default database for database queries
//                                                                 mysqli::send_query — Send the query and return
//                mysqli::set_charset — Sets the default client character set
//            mysqli::set_local_infile_default — Unsets user defined handler for load local infile command
//            mysqli::set_local_infile_handler — Set callback function for LOAD DATA LOCAL INFILE command
//            mysqli::$sqlstate — Returns the SQLSTATE error from previous MySQL operation
//            mysqli::ssl_set — Used for establishing secure connections using SSL
//            mysqli::stat — Gets the current system status
//            mysqli::stmt_init — Initializes a statement and returns an object for use with mysqli_stmt_prepare
//            mysqli::store_result — Transfers a result set from the last query
//            mysqli::$thread_id — Returns the thread ID for the current connection
//            mysqli::thread_safe — Returns whether thread safety is given or not
//            mysqli::use_result — Initiate a result set retrieval
//            mysqli::$warning_count — Returns the number of warnings from the last query for the given link




//            PDO {
//                public __construct ( string $dsn [, string $username [, string $passwd [, array $options ]]] )
//            public bool beginTransaction ( void )
//            public bool commit ( void )
//            public string errorCode ( void )
//            public array errorInfo ( void )
//            public int exec ( string $statement )
//            public mixed getAttribute ( int $attribute )
//            public static array getAvailableDrivers ( void )
//            public bool inTransaction ( void )
//            public string lastInsertId ([ string $name = NULL ] )
//            public PDOStatement prepare ( string $statement [, array $driver_options = array() ] )
//            public PDOStatement query ( string $statement )
//            public string quote ( string $string [, int $parameter_type = PDO::PARAM_STR ] )
//            public bool rollBack ( void )
//            public bool setAttribute ( int $attribute , mixed $value )
//            }




//                PDO::beginTransaction — Initiates a transaction
//                PDO::commit — Commits a transaction
//                PDO::__construct — Creates a PDO instance representing a connection to a database
//                PDO::errorCode — Fetch the SQLSTATE associated with the last operation on the database handle
//                PDO::errorInfo — Fetch extended error information associated with the last operation on the database handle
//                PDO::exec — Execute an SQL statement and return the number of affected rows
//                PDO::getAttribute — Retrieve a database connection attribute
//                PDO::getAvailableDrivers — Return an array of available PDO drivers
//                PDO::inTransaction — Checks if inside a transaction
//                PDO::lastInsertId — Returns the ID of the last inserted row or sequence value
//                PDO::prepare — Prepares a statement for execution and returns a statement object
//                PDO::query — Executes an SQL statement, returning a result set as a PDOStatement object
//                PDO::quote — Quotes a string for use in a query
//                PDO::rollBack — Rolls back a transaction
//                PDO::setAttribute — Set an attribute




