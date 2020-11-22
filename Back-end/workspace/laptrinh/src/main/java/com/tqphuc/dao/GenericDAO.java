package com.tqphuc.dao;

import java.util.List;

import com.tqphuc.mapper.RowMapper;
import com.tqphuc.model.SimModel;

public interface GenericDAO<T> {
	<T> List<T> query(String sql, RowMapper<T> rowMapper, Object... parameter);

	void update(String sql, Object... parameters);
	Long insert (String sql, Object... parameters);

}
