
### 安装说明

① 下载源码包：

你可以通过多种方式下载源码（如HTTP下载，Git克隆），下载之后进入源码目录，使用 `composer` 安装PHP依赖，生成 `.env` 配置文件。


② 导入数据库，并修改 `.env` 配置文件：

请将源码包根目录下 `app.sql` 导入数据库，默认使用 `UTF-8` 编码，`utf8_unicode_ci`作为排序规则。

请根据数据库与服务器实际情况修改 `.env` 配置文件，这里给出一个示例。

```php
APP_ENV=local
APP_DEBUG=true
APP_KEY=RrQvzbUxaKIlj74s3hOYClGQ71zoVixr

DB_HOST=localhost
DB_DATABASE=app
DB_USERNAME=root
DB_PASSWORD=root

CACHE_DRIVER=file
SESSION_DRIVER=file
QUEUE_DRIVER=sync

MAIL_DRIVER=smtp
MAIL_HOST=mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=null
MAIL_PASSWORD=null
```

