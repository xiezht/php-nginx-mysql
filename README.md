# 基于Docker搭建的php + nginx + mysql开发环境

通过docker-compose工具来编排php + nginx + mysql服务。

其他环境组合的搭建，也可参考相应的思路。

## 前置条件

* VS Code IDE + Docker插件
* 宿主机已配置docker环境
* 宿主机已配置docker-compose

## 使用指南

```
.
├── code  # PHP代码仓库
│   └── index.php
├── mysql # MySql服务的镜像构建文件
│   └── Dockerfile
├── nginx # Nginx服务的镜像构建文件
│   ├── conf.d # Nginx服务的配置，编译Nginx服务镜像时拷贝到内部
│   │   └── default.conf
│   └── Dockerfile
├── php   # PHP服务的镜像构建文件
│   └── Dockerfile
├── docker-compose.yml # 
└── README.md
```

VS Code的Docker插件集成了所需的基础命令。

右击`docker-compose.yml`文件，通过`compose up`（启动）, `compose down`（关闭并清理容器），`compose restart`（重启）指令来编译环境。

侧边栏启用Docker工具界面。具体使用方式参见Docker扩展程序的说明。

