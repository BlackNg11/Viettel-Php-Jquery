package com.tqphuc.dao.impl;

import java.util.List;

import com.tqphuc.dao.IKhachangDAO;
import com.tqphuc.mapper.KhachhangMapper;
import com.tqphuc.model.KhachhangModel;

public class KhachhangDAO extends AbstractDAO<KhachhangModel> implements IKhachangDAO {

	@Override
	public List<KhachhangModel> findAll() {
		String sql = "SELECT * FROM khachhang";
		return query(sql, new KhachhangMapper());
	}

	@Override
	public Long save(KhachhangModel khachhangModel) {
		String sql = "INSERT INTO khachhang (sdt, diachi, dichvu) VALUES (?,?,?)";
		return insert(sql, khachhangModel.getSoDt(), khachhangModel.getDiaChi(), khachhangModel.getDichVu());
	}

	@Override
	public void update(KhachhangModel khachhangModel) {
		String sql = "UPDATE khachhang SET sdt = ?, diachi = ?, dichvu = ?  WHERE id = ?";
		this.update(sql, khachhangModel.getSoDt(), khachhangModel.getDiaChi(), khachhangModel.getDichVu(),
				khachhangModel.getId());
	}

	@Override
	public void delete(KhachhangModel khachhangModel) {
		String sql = "DELETE FORM khachhang WHERE id = ?";
		this.update(sql, khachhangModel.getId());
	}

}
