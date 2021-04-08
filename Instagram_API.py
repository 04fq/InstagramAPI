# By Wardencraz | i0.wf
# RX-lib Library Idea | @_irizerx_ 
# Simple Instagram API Written In Python
import requests
r = requests.session()
class Login(): # With Secure && Two Factor In The Next Version
    username = input('[-] Enter Username : ')
    password = input('[-] Enter Password : ')
    url = "https://www.instagram.com/accounts/login/ajax/"
    headers = {
		'accept': '*/*',
		'accept-encoding': 'gzip, deflate, br',
		'accept-language': 'en-US,en;q=0.9',
		'content-type': 'application/x-www-form-urlencoded',
		'sec-ch-ua': '"Google Chrome";v="89", "Chromium";v="89", ";Not A Brand";v="99"',
		'sec-ch-ua-mobile': '?0',
		'sec-fetch-dest': 'empty',
		'sec-fetch-mode': 'cors',
		'sec-fetch-site': 'same-origin',
		'user-agent': 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.90 Safari/537.36',
		'x-requested-with': 'XMLHttpRequest'}
	
    data = {
		"username": username,
		"enc_password": f"#PWD_INSTAGRAM_BROWSER:0:&:{password}",
		"queryParams": "{}",
		"optIntoOneTap": "false"}
	
    req = r.post(url,headers=headers,data=data)
    res = req.text
    if ('userid') in res:
        print("[!] Successfully Login")
    elif ('two_factor') in res:
        print("[+] Two Factor Account")
    elif ('checkpoint_url') in res:
        print("[-] Secure Account")
    else:
        print('[-] Falid Login')
class setprivate():
    privateurl = "https://www.instagram.com/accounts/set_private/"
    headers2 = {
        'accept': '*/*',
        'accept-encoding': 'gzip, deflate, br',
        'accept-language': 'en-GB,en-US;q=0.9,en;q=0.8',
        'content-type': 'application/x-www-form-urlencoded',
        'sec-ch-ua': '"Google Chrome";v="89", "Chromium";v="89", ";Not A Brand";v="99"',
        'sec-ch-ua-mobile': '?0',
        'sec-fetch-dest': 'empty',
        'sec-fetch-mode': 'cors',
        'sec-fetch-site': 'same-origin',
        'user-agent': 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.114 Safari/537.36',
        'x-requested-with': 'XMLHttpRequest'
    }
    data2 = {
        'is_private': 'true'
    }
    req2 = r.post(privateurl, headers=headers2, data=data2)
    res2 = req2.text
    if ('"status":"ok"') in res2:
        print("[+] Your Account Successfully Has Been Private")
    else:
        print("[-] Cant Be Private")
class ChangePassword():
    oldpass = input('[*] Enter Password : ')
    newpass = input('[-] Enter New Password : ')
    changeurl = 'https://www.instagram.com/accounts/password/change/'
    headers3 = {
        'accept': '*/*',
        'accept-encoding': 'gzip, deflate, br',
        'accept-language': 'en-GB,en-US;q=0.9,en;q=0.8',
        'content-type': 'application/x-www-form-urlencoded',
        'sec-ch-ua': '"Google Chrome";v="89", "Chromium";v="89", ";Not A Brand";v="99"',
        'sec-ch-ua-mobile': '?0',
        'sec-fetch-dest': 'empty',
        'sec-fetch-mode': 'cors',
        'sec-fetch-site': 'same-origin',
        'user-agent': 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.114 Safari/537.36',
        'x-requested-with': 'XMLHttpRequest'
    }
    data3 = {
        'enc_old_password': f'PWD_INSTAGRAM_BROWSER:0:&:{oldpass}',
        'enc_new_password1': f'PWD_INSTAGRAM_BROWSER:0:&:{newpass}',
        'enc_new_password2': f'PWD_INSTAGRAM_BROWSER:0:&:{newpass}'
    }
    req3 = r.post(changeurl,headers=headers3,data=data3)
    res3 = req3.text
    if ('"status":"ok"') in res3:
        print("[+]  The Password Has Benn Changed")
    else:
        print("[-] Falied")
class Editprofile():
    # Inputs Here(Like : email = input('Enter Email : '))
    editurl = 'https://www.instagram.com/accounts/edit/'
    headers4 = {
        'accept': '*/*',
        'accept-encoding': 'gzip, deflate, br',
        'accept-language': 'en-GB,en-US;q=0.9,en;q=0.8',
        'content-type': 'application/x-www-form-urlencoded',
        'sec-ch-ua': '"Google Chrome";v="89", "Chromium";v="89", ";Not A Brand";v="99"',
        'sec-ch-ua-mobile': '?0',
        'sec-fetch-dest': 'empty',
        'sec-fetch-mode': 'cors',
        'sec-fetch-site': 'same-origin',
        'user-agent': 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.114 Safari/537.36',
        'x-requested-with': 'XMLHttpRequest'
    }
    data4 = {
        'first_name': #name input,
        'email': #email input,
        'username': #username input,
        'phone_number': #phone input,
        'biography': #biography input,
        'external_url': #external_url input,
        'chaining_enabled': 'on'
    }
    req4 = r.post(editurl,headers=headers4,data=data4)
    res4 = req4.text
    if ('"status":"ok"') in res4:
        print("[+] Your Account Has Been Edited Successfully")
    else:
        print("[-] Falid To Edit Account")
class Email_reset():
    reseturl = 'https://www.instagram.com/accounts/account_recovery_send_ajax/'
    headers5 = {
        'accept': '*/*',
        'accept-encoding': 'gzip, deflate, br',
        'accept-language': 'en-GB,en-US;q=0.9,en;q=0.8',
        'content-type': 'application/x-www-form-urlencoded',
        'sec-ch-ua': '"Google Chrome";v="89", "Chromium";v="89", ";Not A Brand";v="99"',
        'sec-ch-ua-mobile': '?0',
        'sec-fetch-dest': 'empty',
        'sec-fetch-mode': 'cors',
        'sec-fetch-site': 'same-origin',
        'user-agent': 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.114 Safari/537.36',
        'x-requested-with': 'XMLHttpRequest'
    }
    #email = input('enter email')
    # email = email input
    data5 = {
        'email_or_username': #email,
        'recaptcha_challenge_field': '',
        'flow': '',
        'app_id': '',
        'source_account_id': ''
      }
    req5 = r.post(reseturl,headers=headers5,data=data5)
    res5 = req5.text
    if ('"status":"ok"') in res5:
        print("[+] Instagram Sended Rest To Your Email")
    else:
        print("[-] Falid To Reset Email")
class accept_requests():
    requestsid = input('[-] Enter ID : ')
    url = f'https://www.instagram.com/web/friendships/{requestsid}/approve/'
    headers6 = {
    "accept": "*/*",
    "accept-encoding": "gzip, deflate, br",
    "accept-language": "en-GB,en-US;q=0.9,en;q=0.8",
    "content-type": "application/x-www-form-urlencoded",
    "sec-ch-ua": '"Google Chrome";v="89", "Chromium";v="89", ";Not A Brand";v="99"',
    "sec-ch-ua-mobile": "?0",
    "sec-fetch-dest": "empty",
    "sec-fetch-mode": "cors",
    "sec-fetch-site": "same-origin",
    "user-agent": "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.114 Safari/537.36",
    "x-requested-with": "XMLHttpRequest"
}
    req6 = r.post(url, headers=headers6)
    res6 = req6.text
    if ('"status":"ok"') in res6:
        print(f"[+] Accepted Requests | {requestsid}")
    else:
        print("[-] Falid To Accept Request")
class Follow():
    fid = input('[-] Enter ID : ')
    url = f'https://www.instagram.com/web/friendships/{fid}/follow/'
    headers7 = {
    "accept": "*/*",
    "accept-encoding": "gzip, deflate, br",
    "accept-language": "en-GB,en-US;q=0.9,en;q=0.8",
    "content-type": "application/x-www-form-urlencoded",
    "sec-ch-ua": '"Google Chrome";v="89", "Chromium";v="89", ";Not A Brand";v="99"',
    "sec-ch-ua-mobile": "?0",
    "sec-fetch-dest": "empty",
    "sec-fetch-mode": "cors",
    "sec-fetch-site": "same-origin",
    "user-agent": "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.114 Safari/537.36",
    "x-requested-with": "XMLHttpRequest"
    }
    data7 = {

    }
    req7 = r.post(url,headers=headers7,data=data7)
    res7 = req7.text
    if ('"result":"following","status":"ok"') in res7:
        print('[+] The Account Has Been Followed')
    else:
        print('Error')
class Unfollow():
    #ufid = input('[-] Enter ID : ')#  Id Input 
    url = f'https://www.instagram.com/web/friendships/{#ufid}/unfollow/'
    headers8 ={
    "accept": "*/*",
    "accept-encoding": "gzip, deflate, br",
    "accept-language": "en-GB,en-US;q=0.9,en;q=0.8",
    "content-type": "application/x-www-form-urlencoded",
    "sec-ch-ua": '"Google Chrome";v="89", "Chromium";v="89", ";Not A Brand";v="99"',
    "sec-ch-ua-mobile": "?0",
    "sec-fetch-dest": "empty",
    "sec-fetch-mode": "cors",
    "sec-fetch-site": "same-origin",
    "user-agent": "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.114 Safari/537.36",
    "x-requested-with": "XMLHttpRequest"
    }
    data8 = {

    }
    req8 = r.post(url,headers=headers8,data=data8)
    res8 = req8.text
    if ('"status":"ok"') in res8:
        print("[+] Unfollowed Account")
    else:
        print("[-] Error")
class Report():
    url_spam = f'https://www.instagram.com/users/{#userid}/report/'
    headers9 = {
    "accept": "*/*",
    "accept-encoding": "gzip, deflate, br",
    "accept-language": "en-GB,en-US;q=0.9,en;q=0.8",
    "content-type": "application/x-www-form-urlencoded",
    "sec-ch-ua": '"Google Chrome";v="89", "Chromium";v="89", ";Not A Brand";v="99"',
    "sec-ch-ua-mobile": "?0",
    "sec-fetch-dest": "empty",
    "sec-fetch-mode": "cors",
    "sec-fetch-site": "same-origin",
    "user-agent": "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.114 Safari/537.36",
    "x-requested-with": "XMLHttpRequest"
    }
    data9 = {
           'source_name':'',
           'reason_id': 1,
           'frx_context':''}
    req9 = r.post(url_spam, headers=headers9, data=data9)
    res9 = req9.text
    if ('"status":"ok"') in res9:
        print('[-] Done Spam')
    else:
        print('[-] Error')
# You Can Add Anthor Reports Here | يمكنك ان تضيف الابلاغات الباقية
class userinfo():
    url = f'https://www.instagram.com/{#user}/?__a=1'
    headers10 = {
    "accept": "*/*",
    "accept-encoding": "gzip, deflate, br",
    "accept-language": "en-GB,en-US;q=0.9,en;q=0.8",
    "content-type": "application/x-www-form-urlencoded",
    "sec-ch-ua": '"Google Chrome";v="89", "Chromium";v="89", ";Not A Brand";v="99"',
    "sec-ch-ua-mobile": "?0",
    "sec-fetch-dest": "empty",
    "sec-fetch-mode": "cors",
    "sec-fetch-site": "same-origin",
    "user-agent": "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.114 Safari/537.36",
    "x-requested-with": "XMLHttpRequest"
    }
    req = r.get(url,headers=headers10).json()
    Fname = str(req['graphql']['user']['full_name'])
    ID = str(req['graphql']['user']['id'])
    Biography = str(req['graphql']['user']['biography'])
    Exurl = str(req['graphql']['user']['external_url'])
    private = str(req['graphql']['user']['is_private'])
    verified    = str(req['graphql']['user']['is_verified'])
    picture    = str(req['graphql']['user']['profile_pic_url'])
    #print(Fname,ID,Biography,Exurl,private,verified,picture)
class Comment():
###You Type Here An Input To Get Post Id Or Get Post Id By Post Link
    url_comment = f'https://www.instagram.com/web/comments/{#post_id}/add/'
    headers11 = {
    "accept": "*/*",
    "accept-encoding": "gzip, deflate, br",
    "accept-language": "en-GB,en-US;q=0.9,en;q=0.8",
    "content-type": "application/x-www-form-urlencoded",
    "sec-ch-ua": '"Google Chrome";v="89", "Chromium";v="89", ";Not A Brand";v="99"',
    "sec-ch-ua-mobile": "?0",
    "sec-fetch-dest": "empty",
    "sec-fetch-mode": "cors",
    "sec-fetch-site": "same-origin",
    "user-agent": "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.114 Safari/537.36",
    "x-requested-with": "XMLHttpRequest"
    }
    comment = input('[-] Enter Comment : ')
    # sleep = int(input('Enter Sleep')) ## If You Want To Put A Sleep For Each Comment 
    data11 = {
    'comment_text': f'{comment}',
    'replied_to_comment_id': ''
    }
    while True:
            finalreq = r.post(url_comment, headers=headers11, data=data11)
            resfinal = finalreq.text
            if '"status":"ok"' in resfinal:
                print('Done Comment')
                #time.sleep(sleep)
            else:
                print('[-] Error')
                #time.sleep(sleep)

#################################################
#                                               
#                                               
#              The End | النهاية وشكرا
#
#
##################################################

