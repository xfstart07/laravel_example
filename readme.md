# Laravel for blog

## 目录结构

app  放 Model 的地方
bootstrap 放 引导程序
config 放配置文件
database 放 数据迁移 和 填充数据 的程序
resources 放 资源文件

##  数据迁移

### 创建数据迁移

    php artisan make:migration add_user_id_to_articles --table=articles

`--table` 和 `--create` 选项可用来指定数据表的名称

### 运行数据迁移

    php artisan migrate

## 回滚数据迁移

    php artisan migrate:rollback

## Model

### 创建 model 同时生成 数据迁移

    php artisan make:model User -m

## License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
