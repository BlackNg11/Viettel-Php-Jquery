package com.tqphuc.mapper;

import java.sql.ResultSet;
import java.sql.SQLException;

import com.tqphuc.model.SimModel;

public class SimMapper implements RowMapper<SimModel> {

	@Override
	public SimModel mapRow(ResultSet resultSet) {
		try {
			SimModel sim = new SimModel();
			sim.setId(resultSet.getLong("id"));
			sim.setSoTb(resultSet.getInt("sotb"));
			sim.setSoThuong(resultSet.getInt("sothuong"));
			sim.setSoDep(resultSet.getInt("sodep"));
			return sim;
		} catch (SQLException e) {
			return null;
		}
	}

}
