function myFunc() {
  //some code
}

//incorrect usage of variable scope
$x = 5;
if(true){
  $x = 10;
}
echo $x; //outputs 10

function myFunc2() {
  //incorrect usage of global variables, unexpected behavior
  global $x;
  $x = 20;
}
myFunc2();
echo $x; //outputs 20, but this was unintended, $x is modified globally