# Random CTF website, i dont know why i make this...

As you can see, this is a random CTF challenge. Is has 3 rounds and it kinda easy for anyone who study Cybersecurity. 

You can try it here: [Click here nig](letreantaunem.fwh.is)

And bellow is the writeup :3 

<img width="3072" height="877" alt="image" src="https://github.com/user-attachments/assets/35477a3e-01a9-41fb-bdb5-09f0692f4fda" />

## First round

- When you click the link, it will take you to this page
<img width="1862" height="993" alt="image" src="https://github.com/user-attachments/assets/7424bc66-7f8f-4b7d-b5bb-1770e6f11487" />

- When u checking the source code, you can see this class have a sus name, and right net to it is the cmt "==", so you can easily know that this is a Base64 code:

<img width="439" height="69" alt="image" src="https://github.com/user-attachments/assets/101b295f-7451-4843-a74d-a06326e6000d" />

- Decode it and you will have this text:

<img width="981" height="683" alt="image" src="https://github.com/user-attachments/assets/b5ed92f9-0353-42fe-8292-36542891285e" />

## Second round

- Go to that:
<img width="1386" height="843" alt="image" src="https://github.com/user-attachments/assets/45ad42fd-70be-4ab6-a71a-e60cd4f7059e" />

- You can see this login form
- When you creat an account and login, it you lead u to this site, nothing sus here, but dont forget to say hi to my Doto >:(

<img width="1556" height="897" alt="image" src="https://github.com/user-attachments/assets/bce58f2e-f6c7-4137-94fa-7f8c14daaa82" />

- Return to the login form, u can see that login forms ussully involve SQL. Mention SQL and it's about SQL Injection. Enter the string "' OR 1=1-- -" and it will redirected you to the secret site:

<img width="1864" height="917" alt="image" src="https://github.com/user-attachments/assets/a63e561c-e4e9-4b7e-bad6-387fa9d4d54a" />

## Last Round 

- Làm theo chỉ dẫn của trang admin, khi đến bước nhập code thì bạn nhận ra code đã bị ộ u i ăn mất:

<img width="1880" height="1005" alt="image" src="https://github.com/user-attachments/assets/ffd59b89-4074-4484-93ab-7f85b752a821" />

- Thử nhập một câu lệnh để kiểm tra xem nó có bị XSS không:

<img width="1866" height="992" alt="image" src="https://github.com/user-attachments/assets/81564aa4-ff58-4505-b0ac-b65b4fb8a7ed" />

- Vậy là đã xác nhận nó bị XSS, giờ lướt xem phần source code thì thấy nó có một file tên "KhoiDang.php":

<img width="238" height="98" alt="image" src="https://github.com/user-attachments/assets/6075d12a-ad20-4498-ac04-2a791918ac64" />

- Giờ thử dùng câu lệnh để chạy file php đó:
window.location.href = "khoidang.php";

<img width="1865" height="245" alt="image" src="https://github.com/user-attachments/assets/d8ed5ce7-f60c-4c6c-ac02-628c43ccf2d0" />

FLAG=KMA{M4nH4tt4n_C4f3_2025!}


