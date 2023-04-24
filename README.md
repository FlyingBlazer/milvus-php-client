# Milvus Php Client

Milvus 2.2 gRPC Php Client.

## Compatibility

-------------------



| Php | Milvus | 
| --- | ------- | 
| 7.4 | 2.x |


## Installation

------------
Run composer on the terminal `composer require hasanmertermis/milvus-php-client` or composer.json add `hasanmertermis/milvus-php-client`


## Example 

----------------------

### Client

-----------------------
```php
$client = new \Domain\Milvus();
```



### Connections

------------------

**connection** methods sets the connection parameters.İf parameters are not set host=localhost, port=19530 sets.
But if the parameters are set, the host name and port are set as you entered.

```php
//Default use
$client = new \Domain\Milvus();
$client->connection("example.com", 19530);
```

**getConnectionInfo()** method gets the connection parameters and isConnected info.

**Response**

``` json
[
'host' => "localhost",
'port' => 19530,
'isConnected' => false
];
```

## Crud Operations

--------------------------



### Insert 

-------------

```php
<?php

use Domain\Helpers;
use Domain\Milvus;
use Domain\Schema\Field;
use Milvus\Proto\Schema\DataType;

require_once __DIR__ . '/../../vendor/autoload.php';


$client = new Milvus();
$client->connection('localhost', 19530);
$data = [
    (new Field())->setFieldName('encoding')
        ->setFieldData([[0.11240274459123611, 0.7787224650382996, 0.80665522813792]])
        ->setFieldType(DataType::FloatVector),

    (new Field())->setFieldName('id')
        ->setIsPrimaryField(true)
        ->setFieldData(33331)
        ->setFieldType(DataType::Int64),

    (new Field())->setFieldName('a')
        ->setFieldData(12312)
        ->setFieldType(DataType::Int64)
];

$ids = $client->insert($data, 'deneme2');
print_r($ids);

```

### Delete

----------------

```php
<?php

use Domain\Milvus;

require_once __DIR__ . '/../../vendor/autoload.php';

$client = new Milvus();
$deleteIds = '0196caa8-f6d3-497a-83ee-2fe41dbd52ab';
$deletedIDs = $client->delete('example_collection', $deleteIds);
print_r($deletedIDs);
/**
 * Response
 *  Array
 *   (
 *   [0] => 440741353828219116
 *   )
 */
```

### Update (Delete after insert)

-------------------------------------

```php
<?php

use Domain\Helpers;
use Domain\Milvus;
use Domain\Schema\Field;
use Milvus\Proto\Schema\DataType;

require_once __DIR__ . '/../../vendor/autoload.php';

$client = new Milvus();

$id = '41822b49-2272-46cd-8d49-a959faf819d8';

$client->delete('example_collection', $id, 'id');

$newData = [
    (new Field())->setFieldName('col')
        ->setFieldData([[0.44440274459123611,0.7787224650382996,0.80665522813792]])
        ->setFieldType(DataType::FloatVector),

    (new Field())->setFieldName('id')
        ->setIsPrimaryField(true)
        ->setFieldData($id)
        ->setFieldType(DataType::VarChar)
];

$client->insert($newData, 'example_collection');

```

### Search

----------------------

```php
<?php

use Domain\Milvus;
use Domain\Schema\Field;

require_once __DIR__ . '/../../vendor/autoload.php';

$client = new Milvus();

$data = (new Field())
    ->setFieldData([0.11240274459123611,0.7787224650382996,0.80665522813792])
    ->setMetricType('L2')
    ->setFieldName('field_name');

$response = $client->search($data, 'example_collection', 10, 1000);
print_r($response);
```