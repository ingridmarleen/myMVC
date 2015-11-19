<?php
namespace myMvc\Services;

use Exception;

	class View {

		private static $viewFile;
		private static $viewData;

		public static function setView ($view, $data = null) {
			
			try {

				if (!is_string($view)) {
					throw new Exception ('View says: view should be a string.');
				}

				if (!is_null($data) && !is_array($data)) {
					throw new Exception ('View says: data should be an array.');
				}

				self::$viewFile = $view;
				self::$viewData = $data;

			} catch (Exception $e) {

				echo $e->getMessage();
			}

			//View::setView('user.index', array('users' => $users));
		}

		public static function displayView () {
			
			try {
				
				if (!file_exists(DOC_ROOT . '/' . self::$viewFile) || is_dir(DOC_ROOT . '/' . self::$viewFile)) {
					throw new Exception ('View says: view should be a file.');
				}

				if (!is_null(self::$viewData) && !is_array(self::$viewData)) {
					throw new Exception ('View says: Display data should be an array.');
				}

				if (is_array(self::$viewData)) {
					extract(self::$viewData);
				}
				
				include(self::$viewFile);

			} catch (Exception $e) {

				echo $e->getMessage();
			}
		}
	}