FROM toixtran/apache-php5.6-mysql
MAINTAINER bearcat "bearcat@sycl0ver"
RUN apt-get update
RUN apt-get install -y apache2
RUN apt-get install -y php5.6
RUN apt-get install -y libapache2-mod-php5.6
RUN apt-get install -y php5.6-mysql
RUN apt-get install -y vim
RUN apt-get install -y curl
RUN apt-get install -y dos2unix
COPY schema.sql /mysql/schema.sql
COPY privileges.sql /mysql/privileges.sql
COPY setup.sh /mysql/setup.sh
RUN dos2unix /mysql/setup.sh