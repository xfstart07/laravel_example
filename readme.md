# Laravel Example

## 安装项目

### 安装 composer

    // 安装
    php composer-setup.php --install-dir=bin --filename=composer

    // 移到全局
    mv composer.phar /usr/local/bin/composer

[composer 文档](https://getcomposer.org/doc/00-intro.md)

### 安装 Laravel

    composer install

安装路径 `vendor`

### 配置 .env.example

将 `.env.example` 重命名为 `.env`

### 安装 NPM plugin

    npm install


# Laravel 笔记

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

## Controller

### 创建 controller

    php artisan make:controller PhotosController

## Assets 资源文件

使用 gulp 来组织 Css 和 Javascript 文件

### 打包静态文件

    gulp --production

### 监测静态文件的修改

    gulp watch

监测文件的同时,如果文件有修改,会生成 `.map` 后缀文件名, 如果不想生成可以设置关掉。

## License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
