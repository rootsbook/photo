/** 定义数据库参数 */
$db = new Typecho_Db('Pdo_Mysql', 'typecho_');
$db->addServer(array (
  'host' => 'db4free.net',
  'user' => 'root',
  'password' => 'password',
  'charset' => 'utf8',
  'port' => '3306',
  'database' => 'name_of_database',
), Typecho_Db::READ | Typecho_Db::WRITE);
Typecho_Db::set($db);
