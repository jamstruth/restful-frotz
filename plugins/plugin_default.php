<?
	#
	# plugin_default
	# The default plugin for restful-frotz
	#

	#
	# Default input handler doesn't need to do anything
	#
	function handler_input(&$params){

		# nothing
	}

	#
	# Default output handler just outputs to the body
	#
	function handler_output($data){

		if ($data['error']){
			echo $data['error']."\n";
		}else{
			echo $data['title']."\n";
			echo $data['message']."\n";
		}
	
		return array('ok' => 1);
	}

	#
	# Default error handler just outputs to the body
	#
	function handler_error($error){

		error_log("restful-frotz [default] error: ".$error);
		die($error);
	}

