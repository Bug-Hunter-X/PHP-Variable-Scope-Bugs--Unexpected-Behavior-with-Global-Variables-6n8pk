function myFunc() {
  //correct usage of variable scope
  $x = 5; //local variable scope
}

//correct usage of variable scope
$x = 5;
if(true){
  $x = 10; //local variable scope
}
echo $x; //outputs 10

function myFunc2() {
  //correct usage of global variables, expected behavior
  $y = 20;
  return $y; //return value and avoid modification of global scope
}
$x = myFunc2();
echo $x; //outputs 20