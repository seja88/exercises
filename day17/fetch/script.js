// fetch('https://classes.codingbootcamp.cz/assets/classes/602/guardian.php')
//   .then((response) => response.json())
//   .then((data) => {
//     console.log('Data:', data);
//     // some other logic using the data
//   })
//   .catch((error) => console.log('Error:', error))
//   .finally(() => console.log('This is executed every time'));






const loadData = async () => {
  try {
    const response = await fetch('https://classes.codingbootcamp.cz/assets/classes/602/guardian.php');
    const data = await response.json();
    console.log('data: ', data);
  } catch (err) {
    console.log('Error: ', err);
  } finally {
    console.log('This is the finally part');
  }
};

loadData();

