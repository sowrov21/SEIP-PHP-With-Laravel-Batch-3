let my_num = 10;

function gettype(name) {
  return typeof name;
}
function is_null(name) {
  return (name=='') ? 'NULL':'NOT NULL';
}

console.log(gettype(my_num));
console.log(is_null(my_num));
