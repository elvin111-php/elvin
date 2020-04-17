<?php 
if (isset($_POST['submit'])) {
	$ch=curl_init("https://yeniemlak.az/elan/post");
	curl_setopt_array($ch, [
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_POST => true,
		CURLOPT_USERAGENT => 'Mozilla/5.0 (Windows Phone 10.0; Android 6.0.1; Microsoft; RM-1152) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/52.0.2743.116 Mobile Safari/537.36 Edge/15.15254',
		CURLOPT_POSTFIELDS => [
			'elan_nov' => 1,
			'emlak' => 1,
			'seher' => 57,
			'unvan' => 'Lorem Ipsum is simply dummy',
			'qiymet' => 0,
			'emlak_haq' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
			'elan_veren' => 1,
			'ad' => 'AAAAA',
			'tel1' => 0555555555,
			'token' => '12'
		]
	]);
	$source=curl_exec($ch);
	curl_close($ch);
	echo $source;
}
?>
<form action="" method="POST" enctype="multipart/form-data">
<input type="submit" name="submit" value="Yolla">
</form>