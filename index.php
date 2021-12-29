<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<title>あなたのユーザーエージェントは？</title>
</head>

<body>
	<h1>あなたのユーザーエージェント</h1>
	<p>
		<?php
		var_dump(getDevice());

		/**
		 * 端末情報取得関数
		 * @return array 端末情報
		 */
		function getDevice() {
			$ua = [];
			$ua['ua'] = $_SERVER['HTTP_USER_AGENT'];
			if (strpos($ua['ua'], 'iPhone') !== false) {
				$ua['device'] = 'SP';
				$ua['model'] = 'iPhone';
			} elseif (strpos($ua['ua'], 'iPad') !== false) {
				$ua['device'] = 'TL';
				$ua['model'] = 'iPad';
			} elseif (strpos($ua['ua'], 'Android') !== false) {
				$ua['device'] = 'SP';
				$ua['model'] = 'Android';
			} elseif (strpos($ua['ua'], 'Windows') !== false) {
				$ua['device'] = 'PC';
				$ua['model'] = 'Windows';
			} elseif (strpos($ua['ua'], 'Macintosh') !== false) {
				$ua['device'] = 'PC';
				$ua['model'] = 'Macintosh';
			}

			return $ua;
		}
		?>
	</p>
</body>
<script src="./index.js"></script>

</html>