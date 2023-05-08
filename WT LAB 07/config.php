SET SQL_MODE ="NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SETtime_zone="+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATETABLE `cart` (
  `id`int(100) NOT NULL,
  `user_id`int(100) NOT NULL,
  `name`varchar(100) NOT NULL,
  `price`int(100) NOT NULL,
  `quantity`int(100) NOT NULL,
  `image`varchar(100) NOT NULL
) ENGINE=InnoDBDEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATETABLE `message` (
  `id`int(100) NOT NULL,
  `user_id`int(100) NOT NULL,
  `name`varchar(100) NOT NULL,
  `email`varchar(100) NOT NULL,
  `number`varchar(12) NOT NULL,
  `message`varchar(500) NOT NULL
) ENGINE=InnoDBDEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATETABLE `orders` (
  `id`int(100) NOT NULL,
  `user_id`int(100) NOT NULL,
  `name`varchar(100) NOT NULL,
  `number`varchar(12) NOT NULL,
  `email`varchar(100) NOT NULL,
  `method`varchar(50) NOT NULL,
  `address`varchar(500) NOT NULL,
  `total_products`varchar(1000) NOT NULL,
  `total_price`int(100) NOT NULL,
  `placed_on`varchar(50) NOT NULL,
  `payment_status`varchar(20) NOT NULLDEFAULT'pending'
) ENGINE=InnoDBDEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATETABLE `products` (
  `id`int(100) NOT NULL,
  `name`varchar(100) NOT NULL,
  `price`int(100) NOT NULL,
  `image`varchar(100) NOT NULL
) ENGINE=InnoDBDEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATETABLE `users` (
  `id`int(100) NOT NULL,
  `name`varchar(100) NOT NULL,
  `email`varchar(100) NOT NULL,
  `password`varchar(100) NOT NULL,
  `user_type`varchar(20) NOT NULLDEFAULT'user'
) ENGINE=InnoDBDEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTERTABLE`cart`
  ADDPRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTERTABLE`message`
  ADDPRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTERTABLE`orders`
  ADDPRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTERTABLE`products`
  ADDPRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTERTABLE`users`
  ADDPRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTERTABLE`cart`
  MODIFY`id`int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `message`
--
ALTERTABLE`message`
  MODIFY`id`int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `orders`
--
ALTERTABLE`orders`
  MODIFY`id`int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `products`
--
ALTERTABLE`products`
  MODIFY`id`int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTERTABLE`users`
  MODIFY`id`int(100) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;