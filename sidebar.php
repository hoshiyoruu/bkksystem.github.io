<?php
if($_SESSION['typeID'] == 2)
{
echo '<li class="nav-item">
<a class="nav-link collapsed" href="dashboardAJK.php">
  <i class="bi bi-grid"></i>
  <span>Laman Utama</span>
</a>
</li>';
echo '<li class="nav-item">
<a class="nav-link collapsed" href="SenaraiAhliBKK.php">
  <i class="bi bi-clipboard"></i>
  <span>Senarai Ahli BKK</span>
</a>
</li>';
echo '<li class="nav-item">
<a class="nav-link collapsed" href="statusByrn.php">
  <i class="bi bi-cash-stack"></i>
  <span>Status Bayaran</span>
</a>
</li>';
echo '<li class="nav-item">
<a class="nav-link collapsed" href="registerAJK.php">
<i class="bi bi-bookmark-plus"></i>
  <span>Daftar AJK</span>
</a>
</li>';
echo '<li class="nav-item">
<a class="nav-link collapsed" href="plogoutAJK.php">
<i class="bi bi-box-arrow-right" style="color:tomato"></i>
  <span style="color:red">Daftar Keluar</span>
</a>
</li>';
}

if($_SESSION['typeID'] == 3) 
{
echo '<li class="nav-item">
<a class="nav-link collapsed" href="dashboardAJK.php">
  <i class="bi bi-grid"></i>
  <span>Laman Utama</span>
</a>
</li>';
echo '<li class="nav-item">
<a class="nav-link collapsed" href="SenaraiAhliBKK.php">
  <i class="bi bi-clipboard"></i>
  <span>Senarai Ahli BKK</span>
</a>
</li>';
echo '<li class="nav-item">
<a class="nav-link collapsed" href="statusByrn.php">
  <i class="bi bi-cash-stack"></i>
  <span>Status Bayaran</span>
</a>
</li>';
echo '<li class="nav-item">
<a class="nav-link collapsed" href="plogoutAJK.php">
<i class="bi bi-box-arrow-right" style="color:tomato"></i>
  <span style="color:tomato">Daftar Keluar</span>
</a>
</li>';
}

if($_SESSION['typeID'] == 4) 
{
  echo '<li class="nav-item">
  <a class="nav-link collapsed" href="dashboardAJK.php">
    <i class="bi bi-grid"></i>
    <span>Laman Utama</span>
  </a>
  </li>';
  echo '<li class="nav-item">
  <a class="nav-link collapsed" href="SenaraiAhliBKK.php">
    <i class="bi bi-clipboard"></i>
    <span>Senarai Ahli BKK</span>
  </a>
  </li>';
  echo '<li class="nav-item">
  <a class="nav-link collapsed" href="statusByrn.php">
    <i class="bi bi-cash-stack"></i>
    <span>Status Bayaran</span>
  </a>
  </li>';
  echo '<li class="nav-item">
  <a class="nav-link collapsed" href="plogoutAJK.php">
    <i class="bi bi-box-arrow-right" style="color:tomato"></i>
    <span style="color:tomato">Daftar Keluar</span>
  </a>
  </li>';
}
?>

<!--Warning: Undefined array key "typeID" in C:\xampp\htdocs\bkk\NiceAdmin\sidebar.php on line 70-->