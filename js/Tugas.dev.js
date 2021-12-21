"use strict";

document.getElementById("Jumlah").onclick = function () {
  TampilkanNilai();
};

function TampilkanNilai() {
  var NilaiDadu1 = document.getElementById("Nilai1").innerHTML;
  var NilaiDadu2 = document.getElementById("Nilai2").innerHTML;
  total = Number(NilaiDadu1) + Number(NilaiDadu2);
  return alert("Anda Maju Sebanyak ".concat(total, " Langkah"));
}

document.getElementById("bt1").onclick = function () {
  Acak1();
};

function Acak1() {
  var Dadu1 = Math.floor(Math.random() * (7 - 1)) + 1;
  document.getElementById("Nilai1").innerHTML = Dadu1;
  document.getElementById("Dadu1").src = "../Tugas/Dadu/dice" + Dadu1 + ".png";
}

document.getElementById("bt2").onclick = function () {
  Acak2();
};

function Acak2() {
  var Dadu2 = Math.floor(Math.random() * (7 - 1)) + 1;
  document.getElementById("Nilai2").innerHTML = Dadu2;
  document.getElementById("Dadu2").src = "../Tugas/Dadu/dice" + Dadu2 + ".png";
}

document.getElementById("RANDOM").onclick = function () {
  RANDOM);
};

function RANDOM() {
  Acak1();
  Acak2();
}