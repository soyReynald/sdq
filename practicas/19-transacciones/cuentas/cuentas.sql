-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2017 at 09:44 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `sdq_practicas`
--
CREATE DATABASE IF NOT EXISTS SDQ_practicas DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci;
-- --------------------------------------------------------

--
-- Table structure for table `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `genero` enum('Femenino','Masculino') NOT NULL,
  `fecha` date NOT NULL,
  `estado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `clientes`
--

INSERT INTO `clientes` (`id`, `usuario`, `password`, `nombre`, `apellido`, `genero`, `fecha`, `estado`) VALUES
(1, 'rogers63', 'e6a33eee180b07e563d74fee8c2c66b8', 'Alma', 'Rogers', 'Femenino', '2001-09-20', 1),
(2, 'mike28', '2e7dc6b8a1598f4f75c3eaa47958ee2f', 'Mike', 'Paul', 'Masculino', '2004-04-03', 1),
(3, 'rivera92', '1c3a8e03f448d211904161a6f5849b68', 'David', 'Rivera', 'Masculino', '2004-12-21', 1),
(4, 'ross95', '62f0a68a4179c5cdd997189760cbcf18', 'Ross', 'Sanders', 'Masculino', '2004-01-09', 1),
(5, 'paul85', '61bd060b07bddfecccea56a82b850ecf', 'Paula', 'Miller', 'Femenino', '2005-11-16', 1),
(6, 'smith34', '7055b3d9f5cb2829c26cd7e0e601cde5', 'Daniela', 'Smith', 'Femenino', '2005-12-25', 1),
(7, 'james84', 'b7f72d6eb92b45458020748c8d1a3573', 'Sandra', 'James', 'Femenino', '2006-09-20', 1),
(8, 'daniel53', '299cbf7171ad1b2967408ed200b4e26c', 'Daniel', 'Castro', 'Masculino', '2006-12-12', 1),
(9, 'brooks80', 'aa736a35dc15934d67c0a999dccff8f6', 'Brooks', 'Maria', 'Femenino', '2007-08-22', 1),
(10, 'morgan65', 'a28dca31f5aa5792e1cefd1dfd098569', 'Emma', 'Morgan', 'Femenino', '2007-06-14', 1),
(11, 'sanders84', '0629e4f9f0e01e6f20bc2066175e09f7', 'Daisy', 'Sanders', 'Femenino', '2007-02-11', 1),
(12, 'maria40', '17f286a78c74db7ee24374c608a2f20c', 'Maria', 'Bell', 'Femenino', '2008-03-12', 1),
(13, 'brown71', 'fa0c46cc4339a8a51a7da1b33e9d2831', 'Michael', 'Brown', 'Masculino', '2008-05-15', 1),
(14, 'james63', 'b945416fa907fac533d94efe1974ec07', 'Morgan', 'James', 'Masculino', '2008-06-24', 1),
(15, 'jenny0993', '388823cb9249d4cebc9d677a99e1d79d', 'Jenny', 'Chrishaydon', 'Femenino', '2009-03-14', 1),
(16, 'john96', 'd0bb977705c3cdad1e346c898f32a1b7', 'John', 'Wright', 'Masculino', '2009-04-30', 1),
(17, 'miller64', '58b207ee33794b046511203967c8e0d7', 'Miller', 'Wright', 'Masculino', '2010-06-27', 1),
(18, 'mark46', '21cdcb68a932871524e16680fac72e18', 'Rossy', 'Mark', 'Femenino', '2010-08-14', 1),
(19, 'jenny0988', 'ec9ed18ae2a13fef709964af24bb60e6', 'Jenny', 'Maria', 'Femenino', '2010-09-10', 1),
(20, 'mark80', '084489b355edd349bca1c798788de19a', 'Mark', 'Bell', 'Masculino', '2011-10-11', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cuentas`
--

CREATE TABLE `cuentas` (
  `id` int(11) NOT NULL,
  `cliente_id` int(11) NOT NULL,
  `balance` decimal(12,2) NOT NULL,
  `tipo` enum('Ahorro','Corriente') NOT NULL,
  `fecha` date NOT NULL,
  `estado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `cuentas`
--

INSERT INTO `cuentas` (`id`, `cliente_id`, `balance`, `tipo`, `fecha`, `estado`) VALUES
(500482526, 1, '500.00', 'Ahorro', '2001-09-20', 1),
(500482527, 4, '1000.00', 'Ahorro', '2004-01-09', 1),
(500482528, 2, '600.00', 'Ahorro', '2004-04-03', 1),
(500482529, 3, '1500.00', 'Corriente', '2004-12-21', 1),
(500482530, 5, '200.00', 'Ahorro', '2005-11-16', 1),
(500482531, 6, '2000.00', 'Corriente', '2005-12-25', 1),
(500482532, 7, '-30.00', 'Ahorro', '2006-09-20', 0),
(500482533, 8, '350.00', 'Ahorro', '2006-12-12', 1),
(500482534, 11, '640.00', 'Corriente', '2007-02-11', 1),
(500482535, 10, '300.00', 'Ahorro', '2007-06-14', 1),
(500482536, 9, '470.00', 'Corriente', '2007-08-22', 1),
(500482537, 12, '740.00', 'Corriente', '2008-03-12', 1),
(500482538, 13, '20000.00', 'Corriente', '2008-05-15', 1),
(500482539, 14, '3500.00', 'Ahorro', '2008-06-24', 1),
(500482540, 15, '10.00', 'Ahorro', '2009-03-14', 1),
(500482541, 16, '100000.00', 'Ahorro', '2009-04-30', 1),
(500482542, 17, '1200.00', 'Ahorro', '2010-06-27', 1),
(500482543, 18, '3600.00', 'Ahorro', '2010-08-14', 1),
(500482544, 19, '6500.00', 'Ahorro', '2010-09-10', 1),
(500482545, 20, '52600.00', 'Corriente', '2011-10-11', 1);

-- --------------------------------------------------------

--
-- Table structure for table `movimientos`
--

CREATE TABLE `movimientos` (
  `id` int(11) NOT NULL,
  `monto` decimal(12,2) NOT NULL,
  `origen` int(11) NOT NULL,
  `destino` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  `comentario` varchar(250) NOT NULL,
  `estado` enum('Completada','En Proceso') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `movimientos`
--

INSERT INTO `movimientos` (`id`, `monto`, `origen`, `destino`, `fecha`, `comentario`, `estado`) VALUES
(1, '200.00', 500482539, 500482538, '2017-12-10 03:25:39', 'Pago de las vacaciones', 'Completada'),
(2, '150.00', 500482528, 500482535, '2017-07-12 07:36:40', 'No comentarios', 'Completada');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cuentas`
--
ALTER TABLE `cuentas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cliente_id` (`cliente_id`);

--
-- Indexes for table `movimientos`
--
ALTER TABLE `movimientos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `origen` (`origen`),
  ADD KEY `destino` (`destino`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `cuentas`
--
ALTER TABLE `cuentas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=500482546;

--
-- AUTO_INCREMENT for table `movimientos`
--
ALTER TABLE `movimientos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cuentas`
--
ALTER TABLE `cuentas`
  ADD CONSTRAINT `cuentas_ibfk_1` FOREIGN KEY (`cliente_id`) REFERENCES `clientes` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `movimientos`
--
ALTER TABLE `movimientos`
  ADD CONSTRAINT `movimientos_ibfk_1` FOREIGN KEY (`origen`) REFERENCES `cuentas` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `movimientos_ibfk_2` FOREIGN KEY (`destino`) REFERENCES `cuentas` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
