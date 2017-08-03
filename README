# PlayStation Store territory redirection

The PlayStation Store website doesn't propose a unique URL to access a given game from any country and forces to have one link per territory. The problem is that users from different territories will end up with a "page not found".

This PHP script allows to create a single link that will redirect to the correct PlayStation Store page corresponding to the user's territory, avoiding any issue with missing content.

# How to use

Call ```psstore.php``` by providing the game content ID in the following GET variable:

  - ```scee``` for european store content ID 
  - ```scea``` for american store content ID
  - ```scej``` for japanese store content ID
  - ```scek``` for asian store content ID

# Example use

This example will redirect to the game NeuroVoider for american and european store (the game is not available in other territories):
```psstore.php?scee=EP1302-CUSA05168_00-NEUROVOIDERPS4EU&scea=UP1309-CUSA05150_00-NEUROVOIDERPS4US```