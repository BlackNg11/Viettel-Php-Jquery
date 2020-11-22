package com.tqphuc.mapper;

import java.sql.ResultSet;
import java.sql.SQLException;

import com.tqphuc.model.KhachhangModel;

public class KhachhangMapper implements RowMapper<KhachhangModel> {

	@Override
	public KhachhangModel mapRow(ResultSet resultSet) {
		try {
			KhachhangModel kh = new KhachhangModel();
			kh.setId(resultSet.getLong("id"));
			kh.setSoDt(resultSet.getInt("sodt"));
			kh.setDiaChi(resultSet.getString("diachi"));
			kh.setDichVu(resultSet.getString("dichvu"));
			return kh;
		} catch (SQLException e) {
			return null;
		}
	}

}
