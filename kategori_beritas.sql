

INSERT INTO `kategori_beritas` (`id`, `kategori_berita`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Info Admin', 'info-admin', '2023-05-02 02:41:17', '2023-05-02 02:41:17'),
(2, 'Peraturan Aplikasi', 'peraturan-aplikasi', '2023-05-02 02:42:10', '2023-05-02 02:42:10'),
(3, 'Berita Lokal', 'berita-lokal', '2023-05-02 02:38:01', '2023-05-02 02:38:01'),
(4, 'Berita Nasional', 'berita-nasional', '2023-05-02 02:39:10', '2023-05-02 02:39:10'),
(5, 'Pengumuman', 'pengumuman', '2023-05-02 02:39:40', '2023-05-02 02:39:40'),
(6, 'Lowongan Kerja', 'lowongan-kerja', '2023-05-02 02:40:37', '2023-05-02 02:40:37');


--
ALTER TABLE `kategori_beritas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kategori_beritas_kategori_berita_unique` (`kategori_berita`),
  ADD UNIQUE KEY `kategori_beritas_slug_unique` (`slug`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori_beritas`
--
ALTER TABLE `kategori_beritas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
