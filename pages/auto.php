<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Blablatac - Accueil</title>
  <script src="JS_Search.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
  <link rel="shortcut icon" href="../assets/img/tac_petit_abg.png" type="image/x-icon">
</head>
<body>
  <header class="header">
    <div class="header-left">
      <img src="../assets/img/tac_sansbg.png" alt="Logo Blablatac" class="logo">
    </div>
  </header>
  <main class="main-content">
    <h1 class="welcome">
      Bonjour, <span id="username"></span><span class="question">on part&nbsp;?</span>
    </h1>
    <div class="search-bar">
      <span class="search-label">On part depuis</span>
      <input 
        type="text" 
        placeholder="Ex : l'IUT, la gare..." 
        class="search-input"
        name="search"
      />
      <button class="search-button">GO!</button>
      </div>
    <section class="trip-list">
      <?php include '../traitement/A_Event.php' ?> <!-- Inclusion du fichier A_Event.php -->
    </section>
  </main>
</body>
<style>
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  background-color: #2C2C2C;
  font-family: 'Itim', cursive;
  color: #ffffff;
}

.header {
  width: 180px;
  position: sticky;
  justify-content: space-between;
  align-items: center;
  background-color: #2c2c2c1e;
  top: 0px;
  backdrop-filter: blur(20px);
}

.header-left {
  display: flex;
  align-items: center;
}

.logo {
  margin: 20px;
  width: 150px;
  object-fit: contain;
  
}
.header-right .menu-btn {
  background-color: #3D3D3D;
  color: #ffffff;
  border: none;
  border-radius: 30px;
  padding: 0.5rem 1rem;
  font-size: 1rem;
  cursor: pointer;
}
.main-content {
  padding: 1rem;
  max-width: 600px;
  margin: 0 auto;
  text-align: center;
}

.welcome {
  font-size: 1.5rem;
  margin-bottom: 1.5rem;
  color: #ffffff;
}

.question {
  color: #ff9e7a;
  font-weight: normal;
}

.search-bar {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 0.5rem;
  background-color: #3D3D3D; 
  border-radius: 30px;
  padding: 0.5rem 1rem;
  margin-bottom: 2rem;
  flex-wrap: wrap;
}

.search-label {
  white-space: nowrap;
  color: #ffffff;
  font-size: 1rem;
}

.search-input {
  border: none;
  border-bottom: 3px solid #ff9e7a;
  background-color: #2C2C2C;
  color: #ffffff;
  font-size: 1rem;
  padding: 0.4rem 0.8rem;
  border-radius: 5px;
  min-width: 120px;
}

.search-button {
  background-color: #ff9e7a;
  color: #2C2C2C;
  border: none;
  border-radius: 20px;
  padding: 0.5rem 1rem;
  font-weight: bold;
  cursor: pointer;
}

.trip-list {
  display: flex;
  flex-direction: column;
  gap: 1.5rem;
}

.trip-card {
  background-color: #D9D9D9;
  border-radius: 10px;
  color: #2C2C2C;
  overflow: hidden; 
}

.trip-card-header {
  background-color: #ff9e7a; 
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 0.8rem 1rem;
}

.trip-destination {
  font-size: 1.2rem;
  font-weight: bold;
  margin: 0;
}

.join-btn {
  background-color: #3D3D3D;
  color: #ffffff;
  border: none;
  border-radius: 5px;
  padding: 0.4rem 0.8rem;
  cursor: pointer;
  font-weight: bold;
  font-size: 0.9rem;
}

.trip-card-body {
  padding: 1rem;
  border-bottom: 1px solid #ccc;
  font-size: 0.95rem;
  line-height: 1.4;
}

.trip-card-footer {
  padding: 0.8rem 1rem;
  font-size: 0.9rem;
  font-style: italic;
  color: #333333;
}

</style>
</html>
