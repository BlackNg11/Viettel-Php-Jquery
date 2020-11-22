package com.tqphuc.dao;

import java.util.List;

import com.tqphuc.model.SimModel;

public interface ISimDAO extends GenericDAO<SimModel>{
	SimModel findOne(Long id);
	List<SimModel> findAll();
	/* List<SimModel> findBySimId(Long simId); */
	Long save(SimModel simModel);
	void update(SimModel simModel);
	void delete(SimModel simModel);
}
