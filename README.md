
## Library/Package: 
https://jeroen-g.github.io/Explorer/


## Dependency: 
- Laravel Scout
- Elastic search installed and running at port (Ex: 9200)

## Start: 

- run elastic search and kibana using 
  ```docker-compose up -d```

- elastic search will run at: 9200, kibana will run at 5601 (kibana may not be required)

## Config/ modifications
- scout.php : ```driver => 'elastic'```
- explorer.php:     ```'indexes' => [// add model here] ```

## Model
- Follow model code like: ```Cartographer.php```

## Controller
- Follow controller code like: [SearchController.php](app%2FHttp%2FControllers%2FSearchController.php),
[ListController.php](app%2FHttp%2FControllers%2FListController.php), [AggregateController.php](app%2FHttp%2FControllers%2FAggregateController.php)
