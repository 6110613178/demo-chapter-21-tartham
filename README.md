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
1. มีโฟลเดอร์เก็บโปรเจค 3 ตัว คือ
1) login เป็นโปรเจค XPath injection และ Identify functionality แบบที่มีช่องโหว่
2) login2 เป็นโปรเจค XPath injection และ Identify functionality แบบที่มีการป้องกันแล้ว
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

- ลิงค์ video
