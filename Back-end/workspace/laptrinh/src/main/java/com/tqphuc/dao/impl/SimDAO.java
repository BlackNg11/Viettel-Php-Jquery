package com.tqphuc.dao.impl;

import java.util.List;

import com.tqphuc.dao.ISimDAO;
import com.tqphuc.mapper.SimMapper;
import com.tqphuc.model.SimModel;

public class SimDAO extends AbstractDAO<SimModel> implements ISimDAO {

	@Override
	public List<SimModel> findAll() {
		String sql = "SELECT * FROM sim";
		return query(sql, new SimMapper());
	}

	/*
	 * @Override public List<SimModel> findBySimId(Long simId) { String sql =
	 * "SELECT * FROM sim WHERE .. = ?"; return query(sql, new SimMapper() , simId);
	 * }
	 */

	@Override
	public Long save(SimModel simModel) {
		String sql = "INSERT INTO sim (sotb, sothuong, sodep) VALUES (?,?,?)";
		return insert(sql, simModel.getSoTb(), simModel.getSoThuong(), simModel.getSoDep());
	}

	@Override
	public void update(SimModel simModel) {
		String sql = "UPDATE sim SET sotb = ?, sothuong = ?, sodep = ?  WHERE id = ?";
		this.update(sql, simModel.getSoTb(), simModel.getSoThuong(), simModel.getSoDep(), simModel.getId());
	}

	@Override
	public void delete(SimModel simModel) {
		String sql = "DELETE FORM sim WHERE id = ?";
		this.update(sql, simModel.getId());
	}

	@Override
	public SimModel findOne(Long id) {
		String sql = "SELECT * FROM sim WHERE id = ?";
		List<SimModel> sims = query(sql, new SimMapper(), id);
		return sims.isEmpty() ? null : sims.get(0);
	}

}
