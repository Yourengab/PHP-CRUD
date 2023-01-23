<?php
/*** set the content type header ***/
/*** Without this header, it wont work ***/
header("Content-type: text/css");


$font_family = 'Arial, Helvetica, sans-serif';
$font_size = '0.7em';
$border = '1px solid';
?>

@import url("https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap");

:root {
  --button: #a9ffbc;
  --text: #363537;
  --paragraph: #7a7a7a;
  --shadow: 0px 8px 24px rgba(0, 0, 0, 0.15);
}

body {
  margin: 0;
  padding:  0;
}

* {
  font-family: "Inter";
}

.header {
  margin-top: 50px;
  padding: 0 80px;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.header .search input {
  margin-right: 20px;
  width: 300px;
  height: 37px;
  border: 1px solid var(--paragraph);
  box-shadow: var(--shadow);
  border-radius: 10px;
  padding: 0 20px;
}

.header .search button {
  height: 40px;
  padding: 0 20px;
  border-radius: 10px;
  border: none;
  background-color: var(--button);
  font-size: 16px;  
}

.header .user {
  position: relative;
}

.header .user .profile img {
  background-color: var(--text);
  height: 60px;
  width: 60px;
  border-radius: 50%;
  box-shadow: var(--shadow);
  cursor: pointer;
}

.header .user .userPopup {
  display: none;
  border-radius: 10px;
}

.header .user .userPopup a {
  text-decoration: none;
  color: var(--text);
  font-weight: 500;
}

.header .user .userPopup hr {
  width: 100%;
  height: 1px;
  background-color: var(--text);
  border: none;
}

.header .user .userPopup.show {
  position: absolute;
  border: 1px solid var(--paragraph);
  margin-top: 30px;
  display: flex;
  flex-direction: column;
  gap: 20px;
  background-color: white;
  width: 150px;
  padding: 30px 20px;
  box-shadow: var(--shadow);
  left: -130px;
}

.songContainer {
  margin-top: 50px;
  padding: 0 80px;
  display: flex;
  flex-wrap: wrap;
  justify-content: space-evenly;
  align-items: center;
}

.songContainer .songCard {
  width: 280px;
  height: 400px;
  box-shadow: var(--shadow);
  border-radius: 20px;
  margin-bottom: 50px;
}

.songContainer .songCard .cover img {
  width: 100%;
  height: 200px;
  border-top-left-radius: 20px;
  border-top-right-radius: 20px;
}

.songContainer .songCard .detail .genre {
  background-color: var(--text);
  color: white;
  border-radius: 20px;
  padding: 5px 10px;
  font-size: 12px;
  margin-bottom: 10px;
}

.songContainer .songCard .detail {
  padding: 20px;
}

.songContainer .songCard .detail h3 {
  color: var(--text);
  margin-top: 20px;
  font-size: 17px;
}

.songContainer .songCard .detail p {
  font-size: 15px;
  line-height: 5px;
  color: var(--paragraph);
}

.songContainer .songCard .buttons {
  margin-top: 30px;
  display: flex;
  gap: 10px;
  text-align: center;
  line-height: 40px;
}

.songContainer .songCard .buttons a {
  text-decoration: none;
  border-radius: 20px;
  font-weight: 500;
}

.songContainer .songCard .buttons .update {
  width: 100%;
  background-color: var(--button);
  color: var(--text);
  font-size: 14px;
}

.songContainer .songCard .buttons .delete {
  width: 40%;
  background-color: #ff5d5d;
  color: white;
}

.mainContainer {
  width: 100%;
  height: 110vh;
  background: url(../img/asset/bg.png);
  background-position: center;
  background-size: cover;
  margin-top: -50px;
  display: flex;
  justify-content: center;
  align-items: center;
}

.mainContainer .container {
  background-color: white;
  width: 520px;
  padding: 30px 40px;
  display: flex;
  flex-direction: column;
  border-radius: 20px;
  box-shadow: var(--shadow);
}

.mainContainer .container .tambahText {
  text-align: center;
}

.mainContainer .container .tambahText h2 {
  color: var(--text);
}

.mainContainer .container .tambahText p {
  color: var(--paragraph);
}

.mainContainer .container .tambahText a {
  text-decoration: underline;
  color: #6943FF;

}

.mainContainer .container form input {
  margin-top: 10px;
  height: 40px;
  padding: 0 20px;
  border: 1px solid var(--paragraph);
  border-radius: 10px;
}

.mainContainer .container .judul,.mainContainer .container .genre,.mainContainer .container .artist,.mainContainer .container .cover{
display: flex;
flex-direction: column;
margin: 10px 0;
}

.mainContainer .container .genreArtist {
  display: flex;
  flex-direction: row;
  justify-content: space-between;
}

.mainContainer .container button {
  margin-top: 20px;
  height: 45px;
  width: 100%;
  background-color: var(--button);
  border: none;
  color: var(--text);
  border-radius: 10px;
  font-weight: 500;
  box-shadow: var(--shadow);
  cursor: pointer;
  transition: 200ms ease-in-out ;
}
.mainContainer .container button:hover {
  box-shadow: none;

}


@media screen and (max-width: 820px) {
  .header {
    flex-direction: column;
    align-items: flex-start;
    padding: 0 20px;
  }

  .header .user {
    margin-top: 50px;
  }

  .songContainer {
    padding: 0 20px;
   }

   .header .user .userPopup.show {
    left: 0;
   }
  
}

@media screen and (max-width: 550px) {

.header {
  flex-direction: column;
  align-items: center;
  padding: 0 20px;
}

.header .search form {
  display: flex;
  flex-direction: column;
  margin: 0 auto;
}

.header .search button,
.header .search input {
  width: 300px;
  margin: 0;
  padding: 0 20px;
  
}

.header .search button {
  margin: 0 20px;
  margin-top: 20px;
}

.header .user .profile {
  align-self: flex-end;
}
.header .user .userPopup.show {
  left: -65px;
 }

}