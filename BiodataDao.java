package com.springbootdb.springbootdb.dao;

import com.springbootdb.springbootdb.entities.Biodata;
import org.springframework.data.jpa.repository.JpaRepository;

public interface BiodataDao extends JpaRepository<Biodata, Long> {
}
