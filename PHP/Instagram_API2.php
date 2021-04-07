
<?php
// Thank you alonemazin for Request Bulider
class Login {
    // $username = $_POST['username'];
    // $password = $_POST['password'];
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://www.instagram.com/accounts/login/ajax/');
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, "username: $username // Here Username Post Input
    enc_password: #PWD_INSTAGRAM_BROWSER:0:&:$password // Here Password Post Input Like This
    queryParams: 
    optIntoOneTap: false");

    $headers = array();
    $headers[] = 'accept-encoding: gzip, deflate, br';
    $headers[] = 'accept-language: en-GB,en-US;q=0.9,en;q=0.8';
    $headers[] = 'content-length: 0';
    $headers[] = 'content-type: application/x-www-form-urlencoded';
    $headers[] = 'cookie: ig_did=B229D588-7641-44E0-8035-467C7BEC3282; ig_nrcb=1; mid=YGWX3wALAAFc7t0VgtJpoYSw1rEc; shbid=19303; shbts=1617412509.6840706; csrftoken=YzxXZooDkeqRd0Pz0LHujZ8pPhbPcCM9; ds_user_id=46939718932; sessionid=46939718932%3Ap1kSxsZvJAYbnm%3A0; rur=FTW';
    $headers[] = 'sec-ch-ua: "Google Chrome";v="89", "Chromium";v="89", ";Not A Brand";v="99"';
    $headers[] = 'sec-ch-ua-mobile: ?0';
    $headers[] = 'sec-fetch-dest: empty';
    $headers[] = 'sec-fetch-mode: cors';
    $headers[] = 'sec-fetch-site: same-origin';
    $headers[] = 'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.114 Safari/537.36';
    $headers[] = 'x-csrftoken: YzxXZooDkeqRd0Pz0LHujZ8pPhbPcCM9';
    $headers[] = 'x-ig-app-id: 936619743392459';
    $headers[] = 'x-ig-www-claim: hmac.AR3lfnoTzuB7cFnJFVBI16X6utES3HURCps8zqMzRX3SZafI';
    $headers[] = 'x-instagram-ajax: 5de43cc73d92-hot';
    $headers[] = 'x-requested-with: XMLHttpRequest';
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    $result = curl_exec($ch);
    if(eregi('userid', $result))
	{
		// echo 'True Login For $username && $password';
	}
	else
	{
		if(eregi("checkpoint_url", $result))
		{
			// echo "Secure $username && $password";
		}
		else
		{
			if(eregi("two_factor", $result))
			{
				// echo "Two Factor";
			}
			else
			{
				echo "Failed $username:$password";
			}
		}
	}
    if (curl_errno($ch)) {
        echo 'Error:' . curl_error($ch);
    }
    curl_close($ch);
}
class Setprivate {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://www.instagram.com/accounts/set_private/');
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, "is_private: true");

    $headers = array();
    $headers[] = 'accept: */*';
    $headers[] = 'accept-encoding: gzip, deflate, br';
    $headers[] = 'accept-language: en-GB,en-US;q=0.9,en;q=0.8';
    $headers[] = 'content-length: 16';
    $headers[] = 'content-type: application/x-www-form-urlencoded';
    $headers[] = 'cookie: ig_did=B229D588-7641-44E0-8035-467C7BEC3282; ig_nrcb=1; mid=YGWX3wALAAFc7t0VgtJpoYSw1rEc; shbid=19303; shbts=1617412509.6840706; rur=FTW; csrftoken=wZr6MQnyPovpScCBreLZqq5OOHofdBrV; ds_user_id=46939718932; sessionid=46939718932%3AONZEokLQGCxWRc%3A10';
    $headers[] = 'sec-ch-ua: "Google Chrome";v="89", "Chromium";v="89", ";Not A Brand";v="99"';
    $headers[] = 'sec-ch-ua-mobile: ?0';
    $headers[] = 'sec-fetch-dest: empty';
    $headers[] = 'sec-fetch-mode: cors';
    $headers[] = 'sec-fetch-site: same-origin';
    $headers[] = 'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.114 Safari/537.36';
    $headers[] = 'x-csrftoken: wZr6MQnyPovpScCBreLZqq5OOHofdBrV';
    $headers[] = 'x-ig-app-id: 936619743392459';
    $headers[] = 'x-ig-www-claim: hmac.AR3lfnoTzuB7cFnJFVBI16X6utES3HURCps8zqMzRX3SZZb0';
    $headers[] = 'x-instagram-ajax: 3de2d7ec996d';
    $headers[] = 'x-requested-with: XMLHttpRequest';
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    if(eregi('"status":"ok"', $result))
	{
		// echo 'Done';
	}
	else
	{
			// echo "cant be private";
	}
    $result = curl_exec($ch);
    if (curl_errno($ch)) {
        echo 'Error:' . curl_error($ch);
    }
    curl_close($ch);
}
class ChangePassword {
    $ch = curl_init();
    // $oldpass = $_POST['oldpassword'];
    // $newpass = $_POST['newpassword'];
    curl_setopt($ch, CURLOPT_URL, 'https://www.instagram.com/accounts/password/change/');
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    // $oldpass = Old Password Input
    // $newpass = New Password Input
    curl_setopt($ch, CURLOPT_POSTFIELDS, "enc_old_password: PWD_INSTAGRAM_BROWSER:0:&: $oldpass
    enc_new_password1: PWD_INSTAGRAM_BROWSER:0:&: $newpass 
    enc_new_password2: PWD_INSTAGRAM_BROWSER:0:&: $newpass");
    $headers = array();
    $headers[] = 'accept: */*';
    $headers[] = 'accept-encoding: gzip, deflate, br';
    $headers[] = 'accept-language: en-GB,en-US;q=0.9,en;q=0.8';
    $headers[] = 'content-length: 685';
    $headers[] = 'content-type: application/x-www-form-urlencoded';
    $headers[] = 'cookie: ig_did=B229D588-7641-44E0-8035-467C7BEC3282; ig_nrcb=1; mid=YGWX3wALAAFc7t0VgtJpoYSw1rEc; shbid=19303; shbts=1617412509.6840706; rur=FTW; csrftoken=wZr6MQnyPovpScCBreLZqq5OOHofdBrV; ds_user_id=46939718932; sessionid=46939718932%3AONZEokLQGCxWRc%3A10';
    $headers[] = 'sec-ch-ua: "Google Chrome";v="89", "Chromium";v="89", ";Not A Brand";v="99"';
    $headers[] = 'sec-ch-ua-mobile: ?0';
    $headers[] = 'sec-fetch-dest: empty';
    $headers[] = 'sec-fetch-mode: cors';
    $headers[] = 'sec-fetch-site: same-origin';
    $headers[] = 'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.114 Safari/537.36';
    $headers[] = 'x-csrftoken: wZr6MQnyPovpScCBreLZqq5OOHofdBrV';
    $headers[] = 'x-ig-app-id: 936619743392459';
    $headers[] = 'x-ig-www-claim: hmac.AR3lfnoTzuB7cFnJFVBI16X6utES3HURCps8zqMzRX3SZZb0';
    $headers[] = 'x-instagram-ajax: 3de2d7ec996d';
    $headers[] = 'x-requested-with: XMLHttpRequest';
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    $result = curl_exec($ch);
    if(eregi('"status":"ok"', $result))
	{
		// echo 'Done';
	}
	else
	{
			// echo "cant be private";
	}
    if (curl_errno($ch)) {
        echo 'Error:' . curl_error($ch);
    }
    curl_close($ch);

}
class Editprofile{
    // $email = $_POST['email']
    // $username = $_POST['user']
    // $password = $_POST['password']
    // $first_name = $_POST['fname']
    // $phone_number = $_POST['phonenum']
    // $biography = $_POST['bio']
    // $external_url = $_POST['exurl']
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://www.instagram.com/accounts/edit/');
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, "first_name: $first_name
    email: $email
    username: $username
    phone_number: $phone_number
    biography: $biography
    external_url: $external_url
    chaining_enabled: on");
    
    $headers = array();
    $headers[] = 'accept: */*';
    $headers[] = 'accept-encoding: gzip, deflate, br';
    $headers[] = 'accept-language: en-GB,en-US;q=0.9,en;q=0.8';
    $headers[] = 'content-length: 144';
    $headers[] = 'content-type: application/x-www-form-urlencoded';
    $headers[] = 'cookie: ig_did=B229D588-7641-44E0-8035-467C7BEC3282; ig_nrcb=1; mid=YGWX3wALAAFc7t0VgtJpoYSw1rEc; shbid=19303; shbts=1617412509.6840706; rur=FTW; csrftoken=wZr6MQnyPovpScCBreLZqq5OOHofdBrV; ds_user_id=46939718932; sessionid=46939718932%3AONZEokLQGCxWRc%3A10';
    $headers[] = 'sec-ch-ua: "Google Chrome";v="89", "Chromium";v="89", ";Not A Brand";v="99"';
    $headers[] = 'sec-ch-ua-mobile: ?0';
    $headers[] = 'sec-fetch-dest: empty';
    $headers[] = 'sec-fetch-mode: cors';
    $headers[] = 'sec-fetch-site: same-origin';
    $headers[] = 'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.114 Safari/537.36';
    $headers[] = 'x-csrftoken: wZr6MQnyPovpScCBreLZqq5OOHofdBrV';
    $headers[] = 'x-ig-app-id: 936619743392459';
    $headers[] = 'x-ig-www-claim: hmac.AR3lfnoTzuB7cFnJFVBI16X6utES3HURCps8zqMzRX3SZZb0';
    $headers[] = 'x-instagram-ajax: 3de2d7ec996d';
    $headers[] = 'x-requested-with: XMLHttpRequest';
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    
    $result = curl_exec($ch);
    if(eregi('"status":"ok"', $result))
	{
		// echo 'Done ';
	}
	else
	{
			// echo "cant be Edited";
	}
    if (curl_errno($ch)) {
        echo 'Error:' . curl_error($ch);
    }
    curl_close($ch);
    

}
class Email_rest {
    //$resetemail = $_POST['resetemail'];
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://www.instagram.com/accounts/account_recovery_send_ajax/');
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, "email_or_username: $resetemail  
    recaptcha_challenge_field: 
    flow: 
    app_id: 
    source_account_id:");
    
    $headers = array();
    $headers[] = 'accept: */*';
    $headers[] = 'accept-encoding: gzip, deflate, br';
    $headers[] = 'accept-language: en-GB,en-US;q=0.9,en;q=0.8';
    $headers[] = 'content-length: 93';
    $headers[] = 'content-type: application/x-www-form-urlencoded';
    $headers[] = 'cookie: ig_did=B229D588-7641-44E0-8035-467C7BEC3282; ig_nrcb=1; mid=YGWX3wALAAFc7t0VgtJpoYSw1rEc; shbid=19303; shbts=1617412509.6840706; rur=FTW; csrftoken=SCp5PmWWMAmkxW8ujSBCoPuSKhxmdRQy';
    $headers[] = 'sec-ch-ua: "Google Chrome";v="89", "Chromium";v="89", ";Not A Brand";v="99"';
    $headers[] = 'sec-ch-ua-mobile: ?0';
    $headers[] = 'sec-fetch-dest: empty';
    $headers[] = 'sec-fetch-mode: cors';
    $headers[] = 'sec-fetch-site: same-origin';
    $headers[] = 'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.114 Safari/537.36';
    $headers[] = 'x-csrftoken: SCp5PmWWMAmkxW8ujSBCoPuSKhxmdRQy';
    $headers[] = 'x-ig-app-id: 936619743392459';
    $headers[] = 'x-ig-www-claim: hmac.AR3lfnoTzuB7cFnJFVBI16X6utES3HURCps8zqMzRX3SZZb0';
    $headers[] = 'x-instagram-ajax: 3de2d7ec996d';
    $headers[] = 'x-requested-with: XMLHttpRequest';
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    
    $result = curl_exec($ch);
    if(eregi('"status":"ok"', $result))
	{
		// echo 'Done ';
	}
	else
	{
			// echo "Error";
	}
    if (curl_errno($ch)) {
        echo 'Error:' . curl_error($ch);
    }
    curl_close($ch);
    
}
class acceptrequets {
    // $id = $_POST['id']
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, 'https://www.instagram.com/web/friendships/' .  $id . '/approve/');
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, "");
    
    $headers = array();
    $headers[] = 'accept-encoding: gzip, deflate, br';
    $headers[] = 'accept-language: en-GB,en-US;q=0.9,en;q=0.8';
    $headers[] = 'content-length: 0';
    $headers[] = 'content-type: application/x-www-form-urlencoded';
    $headers[] = 'cookie: ig_did=B229D588-7641-44E0-8035-467C7BEC3282; ig_nrcb=1; mid=YGWX3wALAAFc7t0VgtJpoYSw1rEc; shbid=19303; shbts=1617412509.6840706; csrftoken=YzxXZooDkeqRd0Pz0LHujZ8pPhbPcCM9; ds_user_id=46939718932; sessionid=46939718932%3Ap1kSxsZvJAYbnm%3A0; rur=FTW';
    $headers[] = 'sec-ch-ua: "Google Chrome";v="89", "Chromium";v="89", ";Not A Brand";v="99"';
    $headers[] = 'sec-ch-ua-mobile: ?0';
    $headers[] = 'sec-fetch-dest: empty';
    $headers[] = 'sec-fetch-mode: cors';
    $headers[] = 'sec-fetch-site: same-origin';
    $headers[] = 'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.114 Safari/537.36';
    $headers[] = 'x-csrftoken: YzxXZooDkeqRd0Pz0LHujZ8pPhbPcCM9';
    $headers[] = 'x-ig-app-id: 936619743392459';
    $headers[] = 'x-ig-www-claim: hmac.AR3lfnoTzuB7cFnJFVBI16X6utES3HURCps8zqMzRX3SZafI';
    $headers[] = 'x-instagram-ajax: 5de43cc73d92-hot';
    $headers[] = 'x-requested-with: XMLHttpRequest';
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    
    $result = curl_exec($ch);
    if(eregi('"status":"ok"', $result))
	{
		// echo 'Done ';
	}
	else
	{
			// echo "Error";
	}
    if (curl_errno($ch)) {
        echo 'Error:' . curl_error($ch);
    }
    curl_close($ch);
    
}
class Follow {
    // $id = $_POST['id'];
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, 'https://www.instagram.com/web/friendships/' . $id . '/follow/');
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, "");
    
    $headers = array();
    $headers[] = 'accept: */*';
    $headers[] = 'accept-encoding: gzip, deflate, br';
    $headers[] = 'accept-language: en-GB,en-US;q=0.9,en;q=0.8';
    $headers[] = 'content-length: 0';
    $headers[] = 'content-type: application/x-www-form-urlencoded';
    $headers[] = 'cookie: ig_did=B229D588-7641-44E0-8035-467C7BEC3282; ig_nrcb=1; mid=YGWX3wALAAFc7t0VgtJpoYSw1rEc; shbid=19303; shbts=1617412509.6840706; rur=FTW; csrftoken=0ybREspsJrIvP92OVjhQHmefsZMn5L4R; ds_user_id=46939718932; sessionid=46939718932%3Aprscw22tqpclps%3A13';
    $headers[] = 'sec-ch-ua: "Google Chrome";v="89", "Chromium";v="89", ";Not A Brand";v="99"';
    $headers[] = 'sec-ch-ua-mobile: ?0';
    $headers[] = 'sec-fetch-dest: empty';
    $headers[] = 'sec-fetch-mode: cors';
    $headers[] = 'sec-fetch-site: same-origin';
    $headers[] = 'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.114 Safari/537.36';
    $headers[] = 'x-csrftoken: 0ybREspsJrIvP92OVjhQHmefsZMn5L4R';
    $headers[] = 'x-ig-app-id: 936619743392459';
    $headers[] = 'x-ig-www-claim: hmac.AR3lfnoTzuB7cFnJFVBI16X6utES3HURCps8zqMzRX3SZTvf';
    $headers[] = 'x-instagram-ajax: 3de2d7ec996d';
    $headers[] = 'x-requested-with: XMLHttpRequest';
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    
    $result = curl_exec($ch);
    if(eregi('"result":"following","status":"ok"', $result))
	{
		// echo 'Done ';
	}
	else
	{
			// echo "Error";
	}
    if (curl_errno($ch)) {
        echo 'Error:' . curl_error($ch);
    }
    curl_close($ch);
    

}
class Unfollow {
    //$id = $_POST['id'];
    $ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://www.instagram.com/web/friendships/' . $id . '/unfollow/');
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "");

$headers = array();
$headers[] = 'accept: */*';
$headers[] = 'accept-encoding: gzip, deflate, br';
$headers[] = 'accept-language: en-GB,en-US;q=0.9,en;q=0.8';
$headers[] = 'content-length: 0';
$headers[] = 'content-type: application/x-www-form-urlencoded';
$headers[] = 'cookie: ig_did=B229D588-7641-44E0-8035-467C7BEC3282; ig_nrcb=1; mid=YGWX3wALAAFc7t0VgtJpoYSw1rEc; shbid=19303; shbts=1617412509.6840706; rur=FTW; csrftoken=0ybREspsJrIvP92OVjhQHmefsZMn5L4R; ds_user_id=46939718932; sessionid=46939718932%3Aprscw22tqpclps%3A13';
$headers[] = 'sec-ch-ua: "Google Chrome";v="89", "Chromium";v="89", ";Not A Brand";v="99"';
$headers[] = 'sec-ch-ua-mobile: ?0';
$headers[] = 'sec-fetch-dest: empty';
$headers[] = 'sec-fetch-mode: cors';
$headers[] = 'sec-fetch-site: same-origin';
$headers[] = 'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.114 Safari/537.36';
$headers[] = 'x-csrftoken: 0ybREspsJrIvP92OVjhQHmefsZMn5L4R';
$headers[] = 'x-ig-app-id: 936619743392459';
$headers[] = 'x-ig-www-claim: hmac.AR3lfnoTzuB7cFnJFVBI16X6utES3HURCps8zqMzRX3SZTvf';
$headers[] = 'x-instagram-ajax: 3de2d7ec996d';
$headers[] = 'x-requested-with: XMLHttpRequest';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
if(eregi('"status":"ok"', $result))
{
    // echo 'Done ';
}
else
{
        // echo "Error";
}
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close($ch);

}
class report{
    // $id = $_POST['id'];
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://www.instagram.com/users/' . $id . '/report/');
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, "source_name:
    reason_id: 1
    frx_context:");
    
    $headers = array();
    $headers[] = 'accept: */*';
    $headers[] = 'accept-encoding: gzip, deflate, br';
    $headers[] = 'accept-language: en-GB,en-US;q=0.9,en;q=0.8';
    $headers[] = 'content-length: 37';
    $headers[] = 'content-type: application/x-www-form-urlencoded';
    $headers[] = 'cookie: ig_did=B229D588-7641-44E0-8035-467C7BEC3282; ig_nrcb=1; mid=YGWX3wALAAFc7t0VgtJpoYSw1rEc; shbid=19303; shbts=1617412509.6840706; rur=FTW; csrftoken=0ybREspsJrIvP92OVjhQHmefsZMn5L4R; ds_user_id=46939718932; sessionid=46939718932%3Aprscw22tqpclps%3A13';
    $headers[] = 'sec-ch-ua: "Google Chrome";v="89", "Chromium";v="89", ";Not A Brand";v="99"';
    $headers[] = 'sec-ch-ua-mobile: ?0';
    $headers[] = 'sec-fetch-dest: empty';
    $headers[] = 'sec-fetch-mode: cors';
    $headers[] = 'sec-fetch-site: same-origin';
    $headers[] = 'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.114 Safari/537.36';
    $headers[] = 'x-csrftoken: 0ybREspsJrIvP92OVjhQHmefsZMn5L4R';
    $headers[] = 'x-ig-app-id: 936619743392459';
    $headers[] = 'x-ig-www-claim: hmac.AR3lfnoTzuB7cFnJFVBI16X6utES3HURCps8zqMzRX3SZfeZ';
    $headers[] = 'x-instagram-ajax: 3de2d7ec996d';
    $headers[] = 'x-requested-with: XMLHttpRequest';
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    
    $result = curl_exec($ch);
    if(eregi('"status":"ok"', $result))
    {
        // echo 'Done ';
    }
    else
    {
            // echo "Error";
    }
    if (curl_errno($ch)) {
        echo 'Error:' . curl_error($ch);
    }
    curl_close($ch);
    
}
class userinfo {
    // usrname = $_POST['user']
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://www.instagram.com/' . $username . '/?__a=1');
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    
    $headers = array();
    $headers[] = 'accept-encoding: gzip, deflate, br';
    $headers[] = 'accept-language: en-GB,en-US;q=0.9,en;q=0.8';
    $headers[] = 'content-length: 0';
    $headers[] = 'content-type: application/x-www-form-urlencoded';
    $headers[] = 'cookie: ig_did=B229D588-7641-44E0-8035-467C7BEC3282; ig_nrcb=1; mid=YGWX3wALAAFc7t0VgtJpoYSw1rEc; shbid=19303; shbts=1617412509.6840706; csrftoken=YzxXZooDkeqRd0Pz0LHujZ8pPhbPcCM9; ds_user_id=46939718932; sessionid=46939718932%3Ap1kSxsZvJAYbnm%3A0; rur=FTW';
    $headers[] = 'sec-ch-ua: "Google Chrome";v="89", "Chromium";v="89", ";Not A Brand";v="99"';
    $headers[] = 'sec-ch-ua-mobile: ?0';
    $headers[] = 'sec-fetch-dest: empty';
    $headers[] = 'sec-fetch-mode: cors';
    $headers[] = 'sec-fetch-site: same-origin';
    $headers[] = 'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.114 Safari/537.36';
    $headers[] = 'x-csrftoken: YzxXZooDkeqRd0Pz0LHujZ8pPhbPcCM9';
    $headers[] = 'x-ig-app-id: 936619743392459';
    $headers[] = 'x-ig-www-claim: hmac.AR3lfnoTzuB7cFnJFVBI16X6utES3HURCps8zqMzRX3SZafI';
    $headers[] = 'x-instagram-ajax: 5de43cc73d92-hot';
    $headers[] = 'x-requested-with: XMLHttpRequest';
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    
    $result = curl_exec($ch);
    // echo $result; This Will Show The Info Of The User
    if (curl_errno($ch)) {
        echo 'Error:' . curl_error($ch);
    }
    curl_close($ch);
    
}
?>