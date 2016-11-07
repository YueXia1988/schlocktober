<?php

namespace App\Models;

use PDO;

Class MerchandiseModel extends DatabaseModel
{
	protected static $tablename = 'Merchandise';
	protected static $columns = ['id','name','price','description'];

	}
