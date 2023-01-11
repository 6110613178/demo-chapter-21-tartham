# demo-chapter-21-tartham
demo-chapter-21-tartham created by GitHub Classroom  
  
- สมาชิกกลุ่ม  
นายธีรัช ประสิทธิ์เวช 6110613178  
นายธาม เธียระวิบูลย์ 6110680565  
  
- หัวข้อที่เลือก  
2.1 Identify functionality  
8.5 XPath injection  
8.7 XXE injection  
  
- การจัดระเบียบไฟล์  
XPath injection และ Indentify functionality  
1. มีโฟลเดอร์เก็บโปรเจค 3 ตัว คือ  
1.1 login เป็นโปรเจค XPath injection และ Identify functionality แบบที่มีช่องโหว่  
1.2 login2 เป็นโปรเจค XPath injection และ Identify functionality แบบที่มีการป้องกันแล้ว  
2. มีไฟล์ database คือ login_db.sql  
3. มีการใช้งาน xampp และ phpMyAdmin โดยสามารถโหลด xampp ได้จากลิงค์นี้: https://www.apachefriends.org/download.html  
4. ให้นำโฟลเดอร์โปรเจคทั้ง 3 ตัวไปวางไว้ในโฟลเดอร์ \xampp\htdocs\  
5. เปิดโปรแกรม xampp แล้วทำการ start ทั้ง Apache และ MySQL  
6. เข้า phpMyAdmin ผ่านลิงค์นี้: localhost/phpmyadmin  
  
- วิธีการรันโปรเจค  
5. เปิดโปรแกรม xampp แล้วทำการ start ทั้ง Apache และ MySQL  
6. สามารถเปิด web application login โดยการเข้าลิงค์ localhost/login  
7. สามารถเปิด web application login2 โดยการเข้าลิงค์ localhost/login2  
8. โจมตี XPath injection ด้วยการ login โดยใส่ username เป็น ' or '1'='1 ส่วน password เป็นอะไรก็ได้  
9. โจมตี Identify functionality ด้วยการ register โดยใส่ username ซ้ำกับที่มีใน database (111,222 และ 333)
และ/หรือ ใส่ password และ confirm password ไม่ตรงกัน  
  
- การจัดระเบียบไฟล์  
XXE injection  
File ที่จำเป็นต้องใช้  
1. login.php  
2. send.ph  
3. text.txt  
4. input.txt  
  
โดยมี 2  Folder คือ secure กับ unsecure (สำหรับทดสอบการโจมตี)  
โดยภายในมี 4 ไฟล์ที่จำเป็นต้องใช้  
  
การจัดเก็บไฟล์  
ไฟล์  login.php และ send.php เก็บไว้ใน   C:\xampp\htdocs  
ไฟล์  text.txt  เก็บไว้ใน  C:/Users/Acer/Desktop/text.txt  
ไฟล์  input.txt เก็บไว้ใน  C:/Users/Acer/Desktop/input.txt  
  
วิธีโจมตี  
1. เปิดโปรแกรม xampp แล้วทำการ start Apache  
2. สามารถเปิด web application xxe injection โดยการเข้าลิงค์  localhost/send.php  
3.  ทำการใส่ ENTITY EXTERNAL ลงไปในไฟล์ send.php ในบรรทัดที่ 4-5 ดังนี้  
```
<!DOCTYPE own [ <!ELEMENT own ANY >
<!ENTITY own SYSTEM "file:///C:/Users/Acer/Desktop/text.txt">]>
```
4.  จากนั้นแก้ใน  
```
<user></user>
```
ของบรรทัดที่ 7 โดยใส่ &own; ลงไป  
```
<user>&own;</user>
```
  
- ลิงค์ video  
Part1: https://youtu.be/XlRQqFHuGKA  
Part2: https://youtu.be/2AbwOocdKDY
