<?php
namespace Geyunfei\Framework\Model;

use Illuminate\Database\Eloquent\Model as ElouentModel;
use Illuminate\Database\Eloquent\SoftDeletes;

abstract class Model extends  ElouentModel {

	 use SoftDeletes;
	 protected $dates = ["created_at","updated_at","deleted_at"];
}
