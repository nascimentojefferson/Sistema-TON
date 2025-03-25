SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

CREATE DATABASE IF NOT EXISTS `tonsystems` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `tonsystems`;

CREATE TABLE IF NOT EXISTS `tb_fornecedores` (
  `cd_fornecedor` int(64) NOT NULL AUTO_INCREMENT,
  `nm_fornecedor` varchar(64) NOT NULL,
  `cd_cnpj` varchar(20) NOT NULL,
  `nr_telefone` varchar(25) NOT NULL,
  `ds_endereco` varchar(64) NOT NULL,
  `ds_email` varchar(64) NOT NULL,
  `nm_peca_fornecida` varchar(30) NOT NULL,
  `ds_cidade` varchar(64) NOT NULL,
  `cd_cep` varchar(9) NOT NULL,
  `sg_estado` varchar(2) NOT NULL,
  `im_imagem` varchar(100) NOT NULL,
  PRIMARY KEY (`cd_fornecedor`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `tb_peca` (
  `cd_peca` int(11) NOT NULL AUTO_INCREMENT,
  `nm_peca` varchar(64) NOT NULL,
  `vl_preco` varchar(7) NOT NULL,
  `qt_quantidade` varchar(3) NOT NULL,
  `nm_fornecedor` varchar(64) NOT NULL,
  PRIMARY KEY (`cd_peca`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `tb_usuario` (
  `cd_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nm_usuario` varchar(64) NOT NULL,
  `cd_cpf` varchar(14) NOT NULL,
  `ds_email` varchar(64) NOT NULL,
  `nr_senha` varchar(8) NOT NULL,
  PRIMARY KEY (`cd_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
